<?php

namespace Liberu\RealEstate\Application\Support;

use Liberu\Foundation\Settings\Contracts\SettingDefinition;

final class TeamIntegrationSettings implements SettingDefinition
{
    public function key(): string
    {
        return 'team.integrations';
    }

    public function validate(mixed $value): bool
    {
        return is_array($value) && collect($value)->keys()->every(
            fn (mixed $key): bool => is_string($key) && preg_match('/^[a-z0-9_]+$/', $key) === 1,
        );
    }

    public function secret(): bool
    {
        return true;
    }
}
