<?php

declare(strict_types=1);

namespace Liberu\Foundation\ApiAccessFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'api-access-filament::overview';

    protected static ?string $slug = 'overview-api-access';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.api_access');
    }

    public function getTitle(): string
    {
        return __('filament.pages.api_access');
    }
}
