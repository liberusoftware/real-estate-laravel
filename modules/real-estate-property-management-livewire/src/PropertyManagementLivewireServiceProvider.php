<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementLivewire;

use Illuminate\Support\ServiceProvider;

final class PropertyManagementLivewireServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'real-estate-property-management-livewire');
    }
}
