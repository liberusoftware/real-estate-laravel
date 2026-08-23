<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;
use Liberu\RealEstate\PropertyManagement\Policies\ManagementRecordPolicy;

final class PropertyManagementServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Gate::policy(ManagementRecord::class, ManagementRecordPolicy::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
