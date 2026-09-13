<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Liberu\RealEstate\Properties\Application\CreateProperty;
use Liberu\RealEstate\Properties\Application\DeleteProperty;
use Liberu\RealEstate\Properties\Application\EstimatePropertyTax;
use Liberu\RealEstate\Properties\Application\FetchWalkabilityScores;
use Liberu\RealEstate\Properties\Application\GeneratePropertyQrCode;
use Liberu\RealEstate\Properties\Application\RecordPropertyKey;
use Liberu\RealEstate\Properties\Application\RemovePropertyFavorite;
use Liberu\RealEstate\Properties\Application\SendPropertyToFriend;
use Liberu\RealEstate\Properties\Application\TogglePropertyFavorite;
use Liberu\RealEstate\Properties\Application\TransitionProperty;
use Liberu\RealEstate\Properties\Application\UpdateProperty;
use Liberu\RealEstate\Properties\Application\UpsertPropertyUnit;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertyHistory;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PropertyHistoryResource;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PropertyKeyResource;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PropertyQrCodeResource;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PropertyResource;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PropertyShareResource;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PropertyUnitResource;

final class PropertyController
{
    public function index(Request $request): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless($teamId !== null, 403);

        $pageSize = max(1, min($request->integer('page_size', 25), 100));
        $filters = $request->validate([
            'search' => ['sometimes', 'nullable', 'string', 'max:255'],
            'postal_code' => ['sometimes', 'nullable', 'string', 'max:20'],
            'needs_syncing' => ['sometimes', 'boolean'],
            'amenities' => ['sometimes', 'array', 'max:20'],
            'amenities.*' => ['string', 'max:80'],
            'latitude' => ['sometimes', 'nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['sometimes', 'nullable', 'numeric', 'between:-180,180'],
            'radius' => ['sometimes', 'nullable', 'numeric', 'gt:0', 'max:500'],
            'branch_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_branches', 'id')->where('team_id', $teamId)],
            'min_price' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'max_price' => ['sometimes', 'nullable', 'numeric', 'min:0', 'gte:min_price'],
            'min_bedrooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'max_bedrooms' => ['sometimes', 'nullable', 'integer', 'min:0', 'gte:min_bedrooms'],
            'min_bathrooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'max_bathrooms' => ['sometimes', 'nullable', 'integer', 'min:0', 'gte:min_bathrooms'],
            'min_area' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'max_area' => ['sometimes', 'nullable', 'numeric', 'min:0', 'gte:min_area'],
            'min_year_built' => ['sometimes', 'nullable', ...Property::yearBuiltRules()],
            'max_year_built' => ['sometimes', 'nullable', ...Property::yearBuiltRules(), 'gte:min_year_built'],
            'property_type' => ['sometimes', 'nullable', 'string', 'max:40', Rule::in(array_keys(Property::TYPES))],
            'property_category_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_property_categories', 'id')->where('team_id', $teamId)],
            'property_template_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_property_templates', 'id')->where('team_id', $teamId)],
            'country' => ['sometimes', 'nullable', 'string', 'size:2'],
            'energy_rating' => ['sometimes', 'nullable', 'string', 'max:10'],
            'status' => ['sometimes', 'nullable', Rule::enum(PropertyStatus::class)],
            'sort_by' => ['sometimes', 'nullable', Rule::in(Property::SORTABLE_COLUMNS)],
            'sort_direction' => ['sometimes', 'nullable', Rule::in(['asc', 'desc'])],
            'featured' => ['sometimes', 'boolean'],
            'favorites_only' => ['sometimes', 'boolean'],
            'min_energy_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'min_walkability_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'min_transit_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'min_bike_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
        ]);

        $query = Property::query()->forTeam($teamId)
            ->search($filters['search'] ?? null)
            ->postalCode($filters['postal_code'] ?? null)
            ->when($filters['needs_syncing'] ?? false, fn ($query) => $query->needsSyncing())
            ->hasAmenities($filters['amenities'] ?? [])
            ->when(($filters['latitude'] ?? null) !== null && ($filters['longitude'] ?? null) !== null && ($filters['radius'] ?? null) !== null, fn ($query) => $query->nearby($filters['latitude'], $filters['longitude'], $filters['radius']))
            ->when(array_key_exists('branch_id', $filters), fn ($query) => $query->where('branch_id', $filters['branch_id']))
            ->priceRange($filters['min_price'] ?? null, $filters['max_price'] ?? null)
            ->bedrooms($filters['min_bedrooms'] ?? null, $filters['max_bedrooms'] ?? null)
            ->bathrooms($filters['min_bathrooms'] ?? null, $filters['max_bathrooms'] ?? null)
            ->areaRange($filters['min_area'] ?? null, $filters['max_area'] ?? null)
            ->yearBuiltRange($filters['min_year_built'] ?? null, $filters['max_year_built'] ?? null)
            ->propertyType($filters['property_type'] ?? null)
            ->category($filters['property_category_id'] ?? null)
            ->when($filters['property_template_id'] ?? null, fn ($query) => $query->where('property_template_id', $filters['property_template_id']))
            ->country($filters['country'] ?? null)
            ->energyRating($filters['energy_rating'] ?? null)
            ->status($filters['status'] ?? null)
            ->when($filters['featured'] ?? false, fn ($query) => $query->featured())
            ->when($filters['favorites_only'] ?? false, fn ($query) => $query->favoritedBy($teamId, $request->user()->getAuthIdentifier()))
            ->minEnergyScore($filters['min_energy_score'] ?? null)
            ->walkabilityScore($filters['min_walkability_score'] ?? null)
            ->transitScore($filters['min_transit_score'] ?? null)
            ->bikeScore($filters['min_bike_score'] ?? null);

        return PropertyResource::collection($query->sorted($filters['sort_by'] ?? null, $filters['sort_direction'] ?? 'desc')->paginate($pageSize)->withQueryString())->response();
    }

    public function store(Request $request, CreateProperty $create): JsonResponse
    {
        $validated = $request->validate([
            'address' => ['required', 'string', 'max:500'],
            'branch_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_branches', 'id')->where('team_id', $request->user()?->current_team_id)],
            'title' => ['sometimes', 'nullable', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'description_generated_at' => ['sometimes', 'nullable', 'date'],
            'internal_notes' => ['sometimes', 'nullable', 'string', 'max:10000'],
            'price' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'currency' => ['sometimes', 'nullable', 'string', 'size:3'],
            'bedrooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'bathrooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'reception_rooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'parking' => ['sometimes', 'array'],
            'gardens' => ['sometimes', 'array'],
            'area_sqft' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'year_built' => ['sometimes', 'nullable', ...Property::yearBuiltRules()],
            'structured_address' => ['sometimes', 'array'],
            'latitude' => ['sometimes', 'nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['sometimes', 'nullable', 'numeric', 'between:-180,180'],
            'postal_code' => ['sometimes', 'nullable', 'string', 'max:20'],
            'country' => ['sometimes', 'nullable', 'string', 'size:2'],
            'tenure' => ['sometimes', 'nullable', 'string', 'max:40'],
            'lease_years_remaining' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'service_charge' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'ground_rent' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'energy_rating' => ['sometimes', 'nullable', 'string', 'max:10'],
            'council_tax_band' => ['sometimes', 'nullable', 'string', 'max:10'],
            'energy_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'walkability_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'walkability_description' => ['sometimes', 'nullable', 'string'],
            'transit_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'transit_description' => ['sometimes', 'nullable', 'string'],
            'bike_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'bike_description' => ['sometimes', 'nullable', 'string'],
            'walkability_updated_at' => ['sometimes', 'nullable', 'date'],
            'epc' => ['sometimes', 'array'],
            'virtual_tour_url' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'virtual_tour_provider' => ['sometimes', 'nullable', 'string', 'max:40'],
            'model_3d_url' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'floor_plan_data' => ['sometimes', 'array'],
            'floor_plan_image' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'list_date' => ['sometimes', 'nullable', 'date'],
            'sold_date' => ['sometimes', 'nullable', 'date', 'after_or_equal:list_date'],
            'last_synced_at' => ['sometimes', 'nullable', 'date'],
            'is_featured' => ['sometimes', 'boolean'],
            'live_tour_available' => ['sometimes', 'boolean'],
            'holographic_tour_url' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'holographic_provider' => ['sometimes', 'nullable', 'string', 'max:255'],
            'holographic_metadata' => ['sometimes', 'array'],
            'holographic_enabled' => ['sometimes', 'boolean'],
            'energy_rating_date' => ['sometimes', 'nullable', 'date'],
            'insurance_policy_id' => ['sometimes', 'nullable', 'integer'],
            'insurance_coverage_amount' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'insurance_premium' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'insurance_expiry_date' => ['sometimes', 'nullable', 'date'],
            'jupix_id' => ['sometimes', 'nullable', 'string', 'max:255'],
            'property_type' => ['sometimes', 'string', 'max:40', Rule::in(array_keys(Property::TYPES))],
            'property_category_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_property_categories', 'id')->where('team_id', $request->user()?->current_team_id)],
            'property_template_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_property_templates', 'id')->where('team_id', $request->user()?->current_team_id)],
            'characteristics' => ['sometimes', 'array'],
            'utilities' => ['sometimes', 'array'],
            'features' => ['sometimes', 'array'],
        ]);
        $user = $request->user();
        abort_unless($user?->current_team_id !== null, 403);

        $property = $create->handle($user->current_team_id, $user->getAuthIdentifier(), $validated);

        return (new PropertyResource($property))->response()->setStatusCode(201);
    }

    public function favorite(Request $request, Property $property, TogglePropertyFavorite $toggle): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);

        return response()->json(['favorited' => $toggle->handle($property->team_id, $user->getAuthIdentifier(), $property->getKey())]);
    }

    public function favorites(Request $request): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null, 403);
        $filters = $request->validate([
            'search' => ['sometimes', 'nullable', 'string', 'max:255'],
            'sort_by' => ['sometimes', 'nullable', Rule::in(['created_at', 'updated_at', 'price', 'year_built', 'bedrooms', 'bathrooms', 'area_sqft', 'address'])],
            'sort_direction' => ['sometimes', 'nullable', Rule::in(['asc', 'desc'])],
            'page_size' => ['sometimes', 'integer', 'min:1', 'max:100'],
        ]);
        $query = Property::query()->forTeam($user->current_team_id)
            ->favoritedBy($user->current_team_id, $user->getAuthIdentifier())
            ->search($filters['search'] ?? null);

        return PropertyResource::collection($query->sorted($filters['sort_by'] ?? 'created_at', $filters['sort_direction'] ?? 'desc')->paginate($filters['page_size'] ?? 12)->withQueryString())->response();
    }

    public function removeFavorite(Request $request, Property $property, RemovePropertyFavorite $remove): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);

        return response()->json(['removed' => $remove->handle($property->team_id, $user->getAuthIdentifier(), $property->getKey())]);
    }

    public function similar(Request $request, Property $property): JsonResponse
    {
        abort_unless($request->user()?->current_team_id === $property->team_id, 404);
        $limit = max(1, min($request->integer('limit', 3), 20));

        return PropertyResource::collection($property->similarProperties($limit))->response();
    }

    public function walkability(Request $request, Property $property, FetchWalkabilityScores $fetch, UpdateProperty $update): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);

        if ($property->latitude === null || $property->longitude === null) {
            return response()->json(['message' => 'The property needs latitude and longitude before walkability can be fetched.'], 422);
        }

        $scores = $fetch->handle($property->address, (float) $property->latitude, (float) $property->longitude);
        $updatedProperty = $update->handle($property->team_id, $user->getAuthIdentifier(), $property->getKey(), $scores + ['walkability_updated_at' => now()]);

        return (new PropertyResource($updatedProperty))->response();
    }

    public function qrCode(Request $request, Property $property, GeneratePropertyQrCode $generate): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);
        $validated = $request->validate(['size' => ['sometimes', 'integer', 'min:50', 'max:1000']]);

        return (new PropertyQrCodeResource($generate->forProperty($property, $request->integer('size', 200))))->response();
    }

    public function share(Request $request, Property $property, SendPropertyToFriend $send): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);
        $validated = $request->validate([
            'recipient_email' => ['required', 'email', 'max:255'],
            'recipient_name' => ['required', 'string', 'max:120'],
            'sender_name' => ['required', 'string', 'max:120'],
            'sender_email' => ['required', 'email', 'max:255'],
            'personal_message' => ['sometimes', 'nullable', 'string', 'max:2000'],
        ]);

        return (new PropertyShareResource($send->handle(
            $property,
            $validated['recipient_email'],
            $validated['recipient_name'],
            $validated['sender_name'],
            $validated['sender_email'],
            $validated['personal_message'] ?? null,
        )))->response();
    }

    public function compare(Request $request): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless($teamId !== null, 403);

        $validated = $request->validate([
            'property_ids' => ['required', 'array', 'min:2', 'max:4'],
            'property_ids.*' => ['integer', 'distinct'],
        ]);

        $properties = Property::query()
            ->forTeam($teamId)
            ->whereIn('id', $validated['property_ids'])
            ->get()
            ->keyBy(fn (Property $property): string => (string) $property->getKey());

        abort_unless($properties->count() === count($validated['property_ids']), 404);

        $ordered = collect($validated['property_ids'])
            ->map(fn (int $id): Property => $properties->get((string) $id));

        return PropertyResource::collection($ordered)->response();
    }

    public function taxEstimate(Request $request, EstimatePropertyTax $estimate): JsonResponse
    {
        $validated = $request->validate([
            'purchase_price' => ['required', 'numeric', 'min:0'],
            'country' => ['sometimes', 'string', 'max:80'],
            'buyer_type' => ['sometimes', Rule::in(EstimatePropertyTax::BUYER_TYPES)],
            'annual_tax_rate' => ['sometimes', 'numeric', 'min:0', 'max:1'],
            'transfer_tax_rate' => ['sometimes', 'numeric', 'min:0', 'max:1'],
            'tax_rate' => ['sometimes', 'numeric', 'min:0', 'max:1'],
            'country_name' => ['sometimes', 'string', 'max:80'],
        ]);

        return response()->json($estimate->handle(
            (float) $validated['purchase_price'],
            (string) ($validated['country'] ?? 'UK'),
            $validated,
        ));
    }

    public function show(Request $request, Property $property): JsonResponse
    {
        abort_unless($request->user()?->current_team_id === $property->team_id, 404);

        return (new PropertyResource($property->load('history')))->response();
    }

    public function history(Request $request, Property $property): JsonResponse
    {
        abort_unless($request->user()?->current_team_id === $property->team_id, 404);
        $filters = $request->validate([
            'event' => ['sometimes', 'nullable', 'string', 'max:80'],
            'limit' => ['sometimes', 'integer', 'min:1', 'max:100'],
        ]);

        $history = PropertyHistory::query()
            ->where('property_id', $property->getKey())
            ->when($filters['event'] ?? null, fn ($query, string $event) => $query->byType($event))
            ->latest()
            ->limit($filters['limit'] ?? 50)
            ->get();

        return PropertyHistoryResource::collection($history)->response();
    }

    public function update(Request $request, Property $property, UpdateProperty $update): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);

        $validated = $request->validate([
            'address' => ['sometimes', 'string', 'max:500'],
            'branch_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_branches', 'id')->where('team_id', $request->user()?->current_team_id)],
            'title' => ['sometimes', 'nullable', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'description_generated_at' => ['sometimes', 'nullable', 'date'],
            'internal_notes' => ['sometimes', 'nullable', 'string', 'max:10000'],
            'price' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'currency' => ['sometimes', 'nullable', 'string', 'size:3'],
            'bedrooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'bathrooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'reception_rooms' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'parking' => ['sometimes', 'array'],
            'gardens' => ['sometimes', 'array'],
            'area_sqft' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'year_built' => ['sometimes', 'nullable', ...Property::yearBuiltRules()],
            'structured_address' => ['sometimes', 'array'],
            'latitude' => ['sometimes', 'nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['sometimes', 'nullable', 'numeric', 'between:-180,180'],
            'postal_code' => ['sometimes', 'nullable', 'string', 'max:20'],
            'country' => ['sometimes', 'nullable', 'string', 'size:2'],
            'tenure' => ['sometimes', 'nullable', 'string', 'max:40'],
            'lease_years_remaining' => ['sometimes', 'nullable', 'integer', 'min:0'],
            'service_charge' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'ground_rent' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'energy_rating' => ['sometimes', 'nullable', 'string', 'max:10'],
            'council_tax_band' => ['sometimes', 'nullable', 'string', 'max:10'],
            'energy_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'walkability_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'walkability_description' => ['sometimes', 'nullable', 'string'],
            'transit_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'transit_description' => ['sometimes', 'nullable', 'string'],
            'bike_score' => ['sometimes', 'nullable', 'integer', 'between:0,100'],
            'bike_description' => ['sometimes', 'nullable', 'string'],
            'walkability_updated_at' => ['sometimes', 'nullable', 'date'],
            'epc' => ['sometimes', 'array'],
            'virtual_tour_url' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'virtual_tour_provider' => ['sometimes', 'nullable', 'string', 'max:40'],
            'model_3d_url' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'floor_plan_data' => ['sometimes', 'array'],
            'floor_plan_image' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'list_date' => ['sometimes', 'nullable', 'date'],
            'sold_date' => ['sometimes', 'nullable', 'date', 'after_or_equal:list_date'],
            'last_synced_at' => ['sometimes', 'nullable', 'date'],
            'is_featured' => ['sometimes', 'boolean'],
            'live_tour_available' => ['sometimes', 'boolean'],
            'holographic_tour_url' => ['sometimes', 'nullable', 'url', 'max:2048'],
            'holographic_provider' => ['sometimes', 'nullable', 'string', 'max:255'],
            'holographic_metadata' => ['sometimes', 'array'],
            'holographic_enabled' => ['sometimes', 'boolean'],
            'energy_rating_date' => ['sometimes', 'nullable', 'date'],
            'insurance_policy_id' => ['sometimes', 'nullable', 'integer'],
            'insurance_coverage_amount' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'insurance_premium' => ['sometimes', 'nullable', 'numeric', 'min:0'],
            'insurance_expiry_date' => ['sometimes', 'nullable', 'date'],
            'jupix_id' => ['sometimes', 'nullable', 'string', 'max:255'],
            'property_type' => ['sometimes', 'string', 'max:40', Rule::in(array_keys(Property::TYPES))],
            'property_category_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_property_categories', 'id')->where('team_id', $request->user()?->current_team_id)],
            'property_template_id' => ['sometimes', 'nullable', 'integer', Rule::exists('real_estate_property_templates', 'id')->where('team_id', $request->user()?->current_team_id)],
            'characteristics' => ['sometimes', 'array'],
            'utilities' => ['sometimes', 'array'],
            'features' => ['sometimes', 'array'],
        ]);

        return (new PropertyResource($update->handle($property->team_id, $user->getAuthIdentifier(), $property->getKey(), $validated)))->response();
    }

    public function transition(Request $request, Property $property, string $status, TransitionProperty $transition): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null && (string) $user->current_team_id === (string) $property->team_id, 404);
        $target = PropertyStatus::tryFrom($status);
        abort_unless($target !== null, 404);

        return (new PropertyResource($transition->handle($user->current_team_id, $user->getAuthIdentifier(), $property->getKey(), $target)))->response();
    }

    public function unit(Request $request, Property $property, UpsertPropertyUnit $upsert): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null && (string) $user->current_team_id === (string) $property->team_id, 404);
        $data = $request->validate(['label' => ['required', 'string', 'max:80'], 'status' => ['sometimes', 'string', 'max:40'], 'floor' => ['nullable', 'integer', 'min:0'], 'bedrooms' => ['nullable', 'integer', 'min:0'], 'bathrooms' => ['nullable', 'integer', 'min:0'], 'area_sqft' => ['nullable', 'numeric', 'min:0'], 'characteristics' => ['sometimes', 'array']]);

        return (new PropertyUnitResource($upsert->handle($property, $user->current_team_id, $data)))->response();
    }

    public function key(Request $request, Property $property, RecordPropertyKey $record): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null && (string) $user->current_team_id === (string) $property->team_id, 404);
        $data = $request->validate(['key_reference' => ['required', 'string', 'max:80'], 'quantity' => ['sometimes', 'integer', 'min:1'], 'status' => ['sometimes', 'string', 'max:40'], 'notes' => ['nullable', 'string']]);

        return (new PropertyKeyResource($record->handle($property, $user->current_team_id, $data)))->response()->setStatusCode(201);
    }

    public function destroy(Request $request, Property $property, DeleteProperty $delete): Response
    {
        $user = $request->user();
        abort_unless($user?->current_team_id === $property->team_id, 404);

        $delete->handle($property->team_id, $user->getAuthIdentifier(), $property->getKey());

        return response()->noContent();
    }
}
