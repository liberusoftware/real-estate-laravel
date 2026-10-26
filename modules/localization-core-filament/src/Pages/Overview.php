<?php

declare(strict_types=1);

namespace Liberu\Foundation\LocalizationCoreFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'localization-core-filament::overview';

    protected static ?string $slug = 'overview-localization';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.localization');
    }

    public function getTitle(): string
    {
        return __('filament.pages.localization');
    }
}
