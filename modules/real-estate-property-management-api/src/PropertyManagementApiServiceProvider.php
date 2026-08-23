<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementApi;

use Illuminate\Support\ServiceProvider;

final class PropertyManagementApiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}
