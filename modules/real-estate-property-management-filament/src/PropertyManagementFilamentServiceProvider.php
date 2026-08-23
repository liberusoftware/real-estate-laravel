<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament;

use Illuminate\Support\ServiceProvider;

final class PropertyManagementFilamentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PropertyManagementFilamentPlugin::class);
    }
}
