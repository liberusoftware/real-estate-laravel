<?php

namespace Liberu\RealEstate\Application\Filament\App\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Liberu\RealEstate\Application\Filament\App\Widgets\RoleStatsWidget;
use Liberu\RealEstate\Application\Filament\App\Widgets\RoleWelcomeWidget;

final class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Your workspace';

    /** @return array<class-string> */
    public function getWidgets(): array
    {
        return [
            RoleWelcomeWidget::class,
            RoleStatsWidget::class,
        ];
    }

    public function getColumns(): array
    {
        return [
            'default' => 1,
            'lg' => 2,
        ];
    }
}
