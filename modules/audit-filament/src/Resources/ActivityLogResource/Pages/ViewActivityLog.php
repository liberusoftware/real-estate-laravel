<?php

declare(strict_types=1);

namespace Liberu\Foundation\AuditFilament\Resources\ActivityLogResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use Liberu\Foundation\AuditFilament\Resources\ActivityLogResource;

final class ViewActivityLog extends ViewRecord
{
    protected static string $resource = ActivityLogResource::class;

    // No EditAction: activity_log is append-only, viewing is the only action.
    protected function getHeaderActions(): array
    {
        return [];
    }
}
