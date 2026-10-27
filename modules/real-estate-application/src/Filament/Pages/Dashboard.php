<?php

namespace Liberu\RealEstate\Application\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Liberu\RealEstate\Application\Filament\Widgets\AdminOverviewWidget;

final class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Operations overview';

    /** @return array<class-string> */
    public function getWidgets(): array
    {
        return [AdminOverviewWidget::class];
    }

    public function getColumns(): int
    {
        return 1;
    }
}
