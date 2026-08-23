<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Lettings\Models\Letting;

final class RecordLettingFailure
{
    public function handle(Letting $letting, int|string $teamId, int|string $actorId, string $reason): Letting
    {
        if ((string) $letting->team_id !== (string) $teamId) {
            abort(404);
        }
        $reason = trim($reason);
        if ($reason === '') {
            throw ValidationException::withMessages(['reason' => 'A failure reason is required.']);
        }
        $letting->forceFill(['failure_reason' => $reason, 'audit' => [...($letting->audit ?? []), ['event' => 'failure_recorded', 'actor_id' => $actorId, 'reason' => $reason, 'at' => now()->toISOString()]]])->save();

        return $letting->refresh();
    }
}
