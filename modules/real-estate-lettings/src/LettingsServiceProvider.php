<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Liberu\RealEstate\Lettings\Models\Letting;
use Liberu\RealEstate\Lettings\Policies\LettingPolicy;

final class LettingsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Gate::policy(Letting::class, LettingPolicy::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
