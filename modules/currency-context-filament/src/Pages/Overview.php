<?php

declare(strict_types=1);

namespace Liberu\Foundation\CurrencyContextFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'currency-context-filament::overview';

    protected static ?string $slug = 'overview-currency-context';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.currency_context');
    }

    public function getTitle(): string
    {
        return __('filament.pages.currency_context');
    }
}
