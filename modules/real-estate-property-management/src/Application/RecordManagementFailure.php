<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class RecordManagementFailure
{
    public function handle(ManagementRecord $record, int|string $teamId, int|string $actorId, string $reason): ManagementRecord
    {
        if ((string) $record->team_id !== (string) $teamId) {
            abort(404);
        }
        $reason = trim($reason);
        if ($reason === '') {
            throw ValidationException::withMessages(['reason' => 'A failure reason is required.']);
        }
        $record->forceFill(['failure_reason' => $reason, 'audit' => [...($record->audit ?? []), ['event' => 'failure_recorded', 'actor_id' => $actorId, 'reason' => $reason, 'at' => now()->toISOString()]]])->save();

        return $record->refresh();
    }
}
