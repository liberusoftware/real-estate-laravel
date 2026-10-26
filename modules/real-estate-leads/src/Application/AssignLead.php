<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Leads\Models\Lead;

final class AssignLead
{
    public function handle(Lead $lead, int|string $teamId, int|string|null $userId): Lead
    {
        if ((string) $lead->team_id !== (string) $teamId) {
            throw ValidationException::withMessages(['lead' => 'The lead does not belong to this team.']);
        }

        app(ValidateLeadReferences::class)->handle($teamId, ['assigned_to' => $userId]);

        $lead->forceFill(['assigned_to' => $userId, 'last_activity_at' => now()])->save();

        return $lead->refresh();
    }
}
