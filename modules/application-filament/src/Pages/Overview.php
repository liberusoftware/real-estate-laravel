<?php

declare(strict_types=1);

namespace Liberu\Foundation\ApplicationFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'application-filament::overview';

    protected static ?string $slug = 'overview-application-core';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.application_core');
    }

    public function getTitle(): string
    {
        return __('filament.pages.application_core');
    }
}
