<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PortalsReportingFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\RealEstate\PortalsReportingFilament\Resources\PortalReportResource;

final class PortalsReportingFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'real-estate-portals-reporting';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([PortalReportResource::class]);
    }

    public function boot(Panel $panel): void {}
}
