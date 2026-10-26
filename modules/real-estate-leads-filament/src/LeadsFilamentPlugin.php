<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LeadsFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource;

final class LeadsFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'real-estate-leads';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([LeadResource::class]);
    }

    public function boot(Panel $panel): void {}
}
