<?php

declare(strict_types=1);

namespace Liberu\Foundation\TwoFactorAuthenticationFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'two-factor-authentication-filament::overview';

    protected static ?string $slug = 'overview-two-factor-authentication';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.two_factor_authentication');
    }

    public function getTitle(): string
    {
        return __('filament.pages.two_factor_authentication');
    }
}
