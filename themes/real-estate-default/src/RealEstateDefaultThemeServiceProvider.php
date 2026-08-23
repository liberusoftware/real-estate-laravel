<?php

declare(strict_types=1);

namespace Liberu\Themes\RealEstateDefault;

use Illuminate\Support\ServiceProvider;

final class RealEstateDefaultThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'theme-real-estate-default');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'theme-real-estate-default');
    }
}
