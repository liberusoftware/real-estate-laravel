<?php

namespace Liberu\RealEstate\Application;

use Illuminate\Support\ServiceProvider;
use Liberu\Foundation\UsersRoles\DatabaseServiceProvider;
use Liberu\RealEstate\Application\Providers\Filament\AdminPanelProvider;
use Liberu\RealEstate\Application\Providers\Filament\AppPanelProvider;

final class RealEstateApplicationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(DatabaseServiceProvider::class);
        $this->app->register(AdminPanelProvider::class);
        $this->app->register(AppPanelProvider::class);
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'real-estate-application');
    }
}
