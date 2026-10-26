<?php

declare(strict_types=1);

namespace Liberu\Foundation\AnalyticsCoreFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'analytics-core-filament::overview';

    protected static ?string $slug = 'overview-analytics-core';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.analytics_core');
    }

    public function getTitle(): string
    {
        return __('filament.pages.analytics_core');
    }
}
