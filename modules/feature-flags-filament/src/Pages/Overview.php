<?php

declare(strict_types=1);

namespace Liberu\Foundation\FeatureFlagsFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'feature-flags-filament::overview';

    protected static ?string $slug = 'overview-feature-flags';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.feature_flags');
    }

    public function getTitle(): string
    {
        return __('filament.pages.feature_flags');
    }
}
