<?php

declare(strict_types=1);

namespace Liberu\Foundation\ImportExportFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'import-export-filament::overview';

    protected static ?string $slug = 'overview-import-export';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.import_export');
    }

    public function getTitle(): string
    {
        return __('filament.pages.import_export');
    }
}
