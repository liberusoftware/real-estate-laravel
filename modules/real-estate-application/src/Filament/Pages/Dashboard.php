<?php

namespace Liberu\RealEstate\Application\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Dashboard as BaseDashboard;
use Liberu\RealEstate\Application\Filament\Widgets\AdminOverviewWidget;

final class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Operations overview';

    protected function getHeaderActions(): array
    {
        return [Action::make('setup')->label(InstallationSetupWizard::isComplete() ? 'Installation settings' : 'Set up platform')
            ->icon('heroicon-o-sparkles')
            ->url(fn (): string => InstallationSetupWizard::getUrl())
            ->visible(fn (): bool => InstallationSetupWizard::canAccess())];
    }

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
