<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Application;

use Illuminate\Support\Facades\Event;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Leads\Domain\Events\LeadStatusChanged;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;

final class TransitionLead
{
    public function handle(Lead $lead, int|string $teamId, LeadStatus $status): Lead
    {
        if ((string) $lead->team_id !== (string) $teamId) {
            throw ValidationException::withMessages(['lead' => 'The lead does not belong to this team.']);
        }

        $from = $lead->status;
        if (in_array($from, [LeadStatus::Won, LeadStatus::Lost], true) && $from !== $status) {
            throw ValidationException::withMessages(['status' => "A {$from->value} lead cannot be moved to another status."]);
        }

        $lead->forceFill(['status' => $status, 'last_activity_at' => now()])->save();
        Event::dispatch(new LeadStatusChanged($lead, $from, $status));

        return $lead->refresh();
    }
}
