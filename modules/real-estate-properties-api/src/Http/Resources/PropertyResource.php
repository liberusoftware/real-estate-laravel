<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesApi\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Liberu\RealEstate\Properties\Models\PropertyFavorite;

final class PropertyResource extends JsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        $user = $request->user();
        $isFavorited = $user?->current_team_id !== null && PropertyFavorite::query()
            ->where('team_id', $user->current_team_id)
            ->where('user_id', $user->getAuthIdentifier())
            ->where('property_id', $this->resource->getKey())
            ->exists();

        return $this->resource->only([
            'id', 'team_id', 'created_by', 'branch_id', 'address', 'title', 'description',
            'status', 'property_type', 'deal_type', 'property_category_id', 'property_template_id', 'price', 'currency',
            'bedrooms', 'bathrooms', 'reception_rooms', 'area_sqft', 'year_built', 'characteristics',
            'utilities', 'features', 'has_generator', 'has_wifi', 'has_parking', 'mountain_view', 'altitude',
            'water_source', 'max_guests', 'views_count', 'structured_address', 'parking', 'gardens', 'postal_code', 'country',
            'tenure', 'lease_years_remaining', 'service_charge', 'ground_rent', 'energy_rating', 'energy_rating_date',
            'energy_score', 'council_tax_band', 'epc', 'walkability_score', 'walkability_description',
            'transit_score', 'transit_description', 'bike_score', 'bike_description', 'walkability_updated_at',
            'floor_plan_data', 'floor_plan_image', 'latitude', 'longitude', 'list_date', 'sold_date',
            'last_synced_at', 'published_at', 'is_featured', 'live_tour_available', 'virtual_tour_url',
            'virtual_tour_provider', 'model_3d_url', 'ar_tour_enabled', 'ar_tour_settings', 'ar_placement_guide',
            'ar_model_scale', 'holographic_tour_url', 'holographic_provider', 'holographic_metadata',
            'holographic_enabled', 'description_generated_at', 'internal_notes', 'insurance_policy_id',
            'insurance_coverage_amount', 'insurance_premium', 'insurance_expiry_date', 'rightmove_id',
            'zoopla_id', 'onthemarket_id', 'jupix_id', 'created_at', 'updated_at',
        ]) + [
            'reference' => $this->resource->reference(),
            'is_hmo' => $this->resource->isHmo(),
            'has_active_insurance' => $this->resource->hasActiveInsurance(),
            'days_listed' => $this->resource->daysListed(),
            'price_per_square_foot' => $this->resource->pricePerSquareFoot(),
            'disclosure_facts' => $this->resource->disclosureFacts(),
            'gallery' => array_map(static fn ($item): array => $item->toArray(), $this->resource->galleryItems()),
            'is_favorited' => $isFavorited,
        ];
    }
}
