<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Application;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Liberu\RealEstate\Properties\Models\Property;

final class ValidatePropertyGeography
{
    public function handle(array $attributes, int|string $teamId, ?Property $property = null): void
    {
        $attributes += [
            'region_id' => $property?->region_id,
            'city_id' => $property?->city_id,
            'district_id' => $property?->district_id,
            'agent_id' => $property?->agent_id,
        ];
        $regionId = $attributes['region_id'];
        $cityId = $attributes['city_id'];

        Validator::make($attributes, [
            'region_id' => ['nullable', 'integer', 'exists:real_estate_regions,id'],
            'city_id' => ['nullable', 'integer', Rule::exists('real_estate_cities', 'id')->when($regionId !== null, fn ($rule) => $rule->where('region_id', $regionId))],
            'district_id' => ['nullable', 'integer', Rule::exists('real_estate_districts', 'id')->when($cityId !== null, fn ($rule) => $rule->where('city_id', $cityId))],
            'agent_id' => ['nullable', 'integer', Rule::exists('team_user', 'user_id')->where('team_id', $teamId)],
        ])->validate();
    }
}
