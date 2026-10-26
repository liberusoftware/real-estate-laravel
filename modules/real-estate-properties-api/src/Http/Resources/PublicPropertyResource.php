<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesApi\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Liberu\Foundation\Currency\Services\CurrencyConverter;
use Liberu\RealEstate\PropertiesApi\Http\Resources\Concerns\ResolvesPropertyGallery;

/**
 * Anonymous, storefront-facing property shape. Deliberately narrower than
 * the authenticated PropertyResource (no internal_notes, insurance,
 * rightmove/zoopla sync ids, ...). Only real columns/relations here.
 *
 * deal_type ('sale'/'rent') drives the storefront's Купить/Снять split —
 * distinct from `status` (the listing lifecycle) and from `rentPeriod`
 * (the frontend's display-only cadence for a rental price, not persisted
 * here — real_estate_properties has no such column).
 */
final class PublicPropertyResource extends JsonResource
{
    use ResolvesPropertyGallery;

    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'region_id' => $this->resource->region_id,
            'city_id' => $this->resource->city_id,
            'district_id' => $this->resource->district_id,
            'region' => $this->whenLoaded('region', fn (): ?string => $this->resource->region?->name, null),
            'city' => $this->whenLoaded('city', fn (): ?string => $this->resource->city?->name, null),
            'district' => $this->whenLoaded('district', fn (): ?string => $this->resource->district?->name, null),
            'reference' => $this->resource->reference(),
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'address' => $this->resource->address,
            'territory_code' => $this->resource->territory?->code,
            'property_type' => $this->resource->property_type,
            'deal_type' => $this->resource->deal_type?->value,
            'price' => $this->resource->price,
            'currency' => $this->resource->currency,
            'price_usd' => $this->priceUsd(),
            'bedrooms' => $this->resource->bedrooms,
            'bathrooms' => $this->resource->bathrooms,
            'area_sqft' => $this->resource->area_sqft,
            'latitude' => $this->resource->latitude,
            'longitude' => $this->resource->longitude,
            'features' => $this->resource->features,
            'has_generator' => $this->resource->has_generator,
            'has_wifi' => $this->resource->has_wifi,
            'has_parking' => $this->resource->has_parking,
            'mountain_view' => $this->resource->mountain_view,
            'altitude' => $this->resource->altitude,
            'water_source' => $this->resource->water_source,
            'max_guests' => $this->resource->max_guests,
            'views_count' => $this->resource->views_count,
            'published_at' => $this->resource->published_at?->toIso8601String(),
            'gallery' => array_map(static fn ($item): array => $item->toArray(), $this->resource->galleryItems($this->propertyMediaItems($this->resource))),
        ];
    }

    /**
     * Best-effort TJS/EUR/GBP/… → USD conversion via a cached, daily-refreshed
     * public rate (see OpenExchangeRateApiProvider) — null (not an error) when
     * the currency is unset, unsupported, or the upstream rate is unreachable.
     */
    private function priceUsd(): ?float
    {
        if ($this->resource->price === null || $this->resource->currency === null) {
            return null;
        }

        return app(CurrencyConverter::class)->convertAmount(
            (float) $this->resource->price,
            (string) $this->resource->currency,
            'USD',
        );
    }
}
