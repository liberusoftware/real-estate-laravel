<?php

declare(strict_types=1);

namespace Liberu\RealEstate\SalesProgressionFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\RealEstate\SalesProgressionFilament\Resources\SalesProgressionResource;

final class SalesProgressionFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'real-estate-sales-progression';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([SalesProgressionResource::class]);
    }

    public function boot(Panel $panel): void {}
}
