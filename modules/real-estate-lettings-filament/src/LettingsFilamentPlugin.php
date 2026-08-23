<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource;

final class LettingsFilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'real-estate-lettings';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([LettingResource::class]);
    }

    public function boot(Panel $panel): void {}
}
