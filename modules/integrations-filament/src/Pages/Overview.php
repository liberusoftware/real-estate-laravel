<?php

declare(strict_types=1);

namespace Liberu\Foundation\IntegrationsFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'integrations-filament::overview';

    protected static ?string $slug = 'overview-integrations';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.integrations');
    }

    public function getTitle(): string
    {
        return __('filament.pages.integrations');
    }
}
