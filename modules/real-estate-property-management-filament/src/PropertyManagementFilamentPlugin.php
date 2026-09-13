<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\RealEstate\PropertyManagementFilament\Resources\InspectionResource;

final class PropertyManagementFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'real-estate-property-management';
    }

    /**
     * ManagementRecord/MaintenanceRequest/VendorQuote/WorkOrder are the
     * post-sale repair/contractor workflow — not part of ihona's actual
     * service (explicitly decided against, 2026-09-13). Inspection stays:
     * it replaces a manual "опись" (condition report) the team already
     * does by hand at every rental handover.
     */
    public function register(Panel $panel): void
    {
        $panel->resources([InspectionResource::class]);
    }

    public function boot(Panel $panel): void {}
}
