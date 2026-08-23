<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Lettings\Domain\Events\LettingStatusChanged;
use Liberu\RealEstate\Lettings\Domain\LettingStatus;
use Liberu\RealEstate\Lettings\Models\Letting;

final class TransitionLetting
{
    public function handle(Letting $letting, int|string $teamId, int|string $actorId, LettingStatus $status): Letting
    {
        if ((string) $letting->team_id !== (string) $teamId) {
            abort(404);
        }
        if ($letting->status === LettingStatus::Completed && $status !== LettingStatus::Completed) {
            throw ValidationException::withMessages(['status' => 'Completed lettings cannot be reopened.']);
        }

        $from = $letting->status;
        $letting->forceFill([
            'status' => $status,
            'completed_at' => $status === LettingStatus::Completed ? now() : $letting->completed_at,
            'cancelled_at' => $status === LettingStatus::Cancelled ? now() : $letting->cancelled_at,
            'audit' => [...($letting->audit ?? []), ['event' => $status->value, 'actor_id' => $actorId, 'at' => now()->toISOString()]],
        ])->save();
        event(new LettingStatusChanged($letting, $from, $status, $actorId));

        return $letting->refresh();
    }
}
