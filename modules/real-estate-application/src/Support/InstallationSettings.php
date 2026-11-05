<?php

namespace Liberu\RealEstate\Application\Support;

use Liberu\Foundation\Settings\Contracts\SettingDefinition;

final class InstallationSettings implements SettingDefinition
{
    public function key(): string
    {
        return 'platform.installation';
    }

    public function validate(mixed $value): bool
    {
        return is_array($value) && in_array($value['mode'] ?? null, ['saas', 'dedicated'], true);
    }

    public function secret(): bool
    {
        return false;
    }
}
