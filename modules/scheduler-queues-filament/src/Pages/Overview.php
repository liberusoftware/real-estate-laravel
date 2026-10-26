<?php

declare(strict_types=1);

namespace Liberu\Foundation\SchedulerQueuesFilament\Pages;

use Filament\Pages\Page;

final class Overview extends Page
{
    protected string $view = 'scheduler-queues-filament::overview';

    protected static ?string $slug = 'overview-scheduler-queues';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.scheduler_queues');
    }

    public function getTitle(): string
    {
        return __('filament.pages.scheduler_queues');
    }
}
