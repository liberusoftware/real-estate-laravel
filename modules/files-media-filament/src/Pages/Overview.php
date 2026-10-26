<?php

declare(strict_types=1);

namespace Liberu\Foundation\FilesMediaFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'files-media-filament::overview';

    protected static ?string $slug = 'overview-files-media';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.files_media');
    }

    public function getTitle(): string
    {
        return __('filament.pages.files_media');
    }
}
