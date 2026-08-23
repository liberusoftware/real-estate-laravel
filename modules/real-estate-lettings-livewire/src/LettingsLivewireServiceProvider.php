<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsLivewire;

use Illuminate\Support\ServiceProvider;

final class LettingsLivewireServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'real-estate-lettings-livewire');
    }
}
