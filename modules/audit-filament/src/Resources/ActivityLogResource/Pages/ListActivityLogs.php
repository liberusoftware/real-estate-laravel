<?php

declare(strict_types=1);

namespace Liberu\Foundation\AuditFilament\Resources\ActivityLogResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Liberu\Foundation\AuditFilament\Resources\ActivityLogResource;

final class ListActivityLogs extends ListRecords
{
    protected static string $resource = ActivityLogResource::class;

    // No CreateAction: activity_log is append-only via DatabaseAuditRecorder/
    // LogsActivity, never through this admin surface.
    protected function getHeaderActions(): array
    {
        return [];
    }
}
