<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Application;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

final class ValidateLeadReferences
{
    public function handle(int|string $teamId, array $attributes): void
    {
        Validator::make($attributes, [
            'property_id' => ['nullable', 'integer', Rule::exists('real_estate_properties', 'id')->where('team_id', $teamId)],
            'assigned_to' => ['nullable', 'integer', Rule::exists('team_user', 'user_id')->where('team_id', $teamId)],
        ])->validate();
    }
}
