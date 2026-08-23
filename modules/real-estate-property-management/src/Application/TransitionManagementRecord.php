<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementStatus;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class TransitionManagementRecord
{
    public function handle(ManagementRecord $record, int|string $teamId, int|string $actorId, ManagementStatus $status): ManagementRecord
    {
        if ((string) $record->team_id !== (string) $teamId) {
            abort(404);
        }
        if ($record->status === ManagementStatus::Completed && $status !== ManagementStatus::Completed) {
            throw ValidationException::withMessages(['status' => 'Completed records cannot be reopened.']);
        }
        $record->forceFill(['status' => $status, 'completed_at' => $status === ManagementStatus::Completed ? now() : $record->completed_at, 'cancelled_at' => $status === ManagementStatus::Cancelled ? now() : $record->cancelled_at, 'audit' => [...($record->audit ?? []), ['event' => $status->value, 'actor_id' => $actorId, 'at' => now()->toISOString()]]])->save();

        return $record->refresh();
    }
}
