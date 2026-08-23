<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource;

final class PropertyManagementFilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'real-estate-property-management';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([ManagementRecordResource::class]);
    }

    public function boot(Panel $panel): void {}
}
