<?php

declare(strict_types=1);

namespace Liberu\Foundation\JetstreamBridgeFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'jetstream-bridge-filament::overview';

    protected static ?string $slug = 'overview-jetstream-bridge';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.jetstream_bridge');
    }

    public function getTitle(): string
    {
        return __('filament.pages.jetstream_bridge');
    }
}
