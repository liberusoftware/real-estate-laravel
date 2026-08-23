<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement;

use Illuminate\Support\ServiceProvider;

final class PropertyManagementServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
