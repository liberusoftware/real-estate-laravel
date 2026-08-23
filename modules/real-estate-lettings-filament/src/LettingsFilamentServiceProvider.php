<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament;

use Illuminate\Support\ServiceProvider;

final class LettingsFilamentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(LettingsFilamentPlugin::class);
    }
}
