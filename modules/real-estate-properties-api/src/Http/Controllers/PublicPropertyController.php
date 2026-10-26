<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesApi\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Properties\Domain\DealType;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PublicPropertyResource;

/**
 * Anonymous, read-only property browsing for the public storefront
 * (public frontend). See PublicTerritoryController (real-estate-core-api)
 * for why this resolves "the" public team rather than scoping by
 * $request->user() — there isn't one.
 */
final class PublicPropertyController
{
    public function index(Request $request): JsonResponse
    {
        $team = Team::query()->oldest()->first();

        if (! $team) {
            return PublicPropertyResource::collection(collect())->response();
        }

        $filters = $request->validate([
            'territory' => ['sometimes', 'nullable', 'string', 'max:20'],
            'type' => ['sometimes', 'nullable', 'string', 'max:40'],
            'deal_type' => ['sometimes', 'nullable', Rule::enum(DealType::class)],
            'min_price' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'max_price' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            // Comma-separated room counts, cian-style chips (1,2,3,4,5 — 5
            // meaning "5+"). Not validated further: an unparseable entry is
            // just silently dropped by the int-cast + filter below.
            'rooms' => ['sometimes', 'nullable', 'string', 'max:20'],
            // cian-style sort dropdown: default (newest), cheapest first,
            // priciest first, largest area first.
            'sort' => ['sometimes', 'nullable', Rule::in(['newest', 'price_asc', 'price_desc', 'area_desc'])],
            // Map viewport rectangle for the "search this area" flow:
            // "minLng,minLat,maxLng,maxLat" (matches the order Yandex Maps'
            // own bounds getter uses on the frontend).
            'bbox' => ['sometimes', 'nullable', 'string', 'regex:/^-?\d+\.?\d*,-?\d+\.?\d*,-?\d+\.?\d*,-?\d+\.?\d*$/'],
        ]);

        [$sortColumn, $sortDirection] = match ($filters['sort'] ?? 'newest') {
            'price_asc' => ['price', 'asc'],
            'price_desc' => ['price', 'desc'],
            'area_desc' => ['area_sqft', 'desc'],
            default => ['created_at', 'desc'],
        };

        $roomCounts = ($filters['rooms'] ?? null)
            ? array_values(array_filter(array_map('intval', explode(',', $filters['rooms']))))
            : [];

        $bbox = ($filters['bbox'] ?? null)
            ? array_map('floatval', explode(',', $filters['bbox']))
            : null;

        if ($bbox !== null) {
            abort_unless(abs($bbox[0]) <= 180 && abs($bbox[2]) <= 180 && abs($bbox[1]) <= 90 && abs($bbox[3]) <= 90 && $bbox[1] <= $bbox[3], 422, 'Invalid bounding box.');
        }

        $properties = Property::query()
            ->with(['territory', 'region', 'city', 'district'])
            ->forTeam($team->id)
            ->whereIn('status', [PropertyStatus::Available->value, PropertyStatus::Published->value])
            ->when($filters['territory'] ?? null, fn (Builder $query, string $code): Builder => $query->where(
                fn (Builder $location): Builder => $location
                    ->whereHas('territory', fn (Builder $territory): Builder => $territory->where('code', strtoupper($code)))
                    ->orWhereHas('city', fn (Builder $city): Builder => $city->whereRaw('lower(slug) = ?', [strtolower($code)])),
            ))
            ->when($filters['type'] ?? null, fn ($q, $type) => $q->where('property_type', $type))
            ->when($filters['deal_type'] ?? null, fn ($q, $dealType) => $q->where('deal_type', $dealType))
            ->when($filters['min_price'] ?? null, fn ($q, $min) => $q->where('price', '>=', $min))
            ->when($filters['max_price'] ?? null, fn ($q, $max) => $q->where('price', '<=', $max))
            ->when($roomCounts !== [], function ($q) use ($roomCounts): void {
                $q->where(function ($q) use ($roomCounts): void {
                    foreach ($roomCounts as $count) {
                        // "5" in the chips means "5+".
                        $count >= 5 ? $q->orWhere('bedrooms', '>=', 5) : $q->orWhere('bedrooms', $count);
                    }
                });
            })
            ->when($bbox, fn ($q, $b) => $q->withinBounds($b[1], $b[0], $b[3], $b[2]))
            ->sorted($sortColumn, $sortDirection)
            ->paginate(max(1, min($request->integer('page_size', 24), 60)));

        return PublicPropertyResource::collection($properties)->response();
    }

    public function show(Request $request, Property $property): JsonResponse
    {
        abort_unless(in_array($property->status, [PropertyStatus::Available, PropertyStatus::Published], true), 404);

        $property->recordView($request->ip() ?? 'unknown');

        return (new PublicPropertyResource($property->load(['territory', 'region', 'city', 'district'])))->response();
    }
}
