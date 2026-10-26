<?php

declare(strict_types=1);

namespace Liberu\Foundation\NotificationsFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'notifications-filament::overview';

    protected static ?string $slug = 'overview-notifications';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.notifications');
    }

    public function getTitle(): string
    {
        return __('filament.pages.notifications');
    }
}
