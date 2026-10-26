<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Listeners;

use Liberu\RealEstate\Leads\Application\TransitionLead;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;
use Liberu\RealEstate\Parties\Models\Party;
use Liberu\RealEstate\Viewings\Domain\Events\ViewingCreated;

/**
 * Booking a viewing is the pipeline signal that a lead moved past
 * qualification. Matched by email (via the viewing's party) when known,
 * falling back to "the most recently active lead on this property" —
 * neither Viewing nor Lead carries a direct foreign key to the other.
 */
final class TransitionLeadFromViewing
{
    public function handle(ViewingCreated $event): void
    {
        $viewing = $event->viewing;
        $lead = $this->findLead($viewing->team_id, $viewing->property_id, $viewing->party_id);

        if ($lead === null || $lead->status->rank() >= LeadStatus::Viewing->rank()) {
            return;
        }

        app(TransitionLead::class)->handle($lead, $viewing->team_id, LeadStatus::Viewing);
    }

    private function findLead(int|string $teamId, int|string|null $propertyId, int|string|null $partyId): ?Lead
    {
        $email = $partyId !== null ? Party::query()->whereKey($partyId)->value('email') : null;

        $query = Lead::query()->forTeam($teamId)->whereNotIn('status', [LeadStatus::Won, LeadStatus::Lost]);

        if ($email !== null) {
            $query->where('email', $email);
        } elseif ($propertyId !== null) {
            return null;
        } else {
            return null;
        }

        return $query->when($propertyId !== null, fn ($query) => $query->where('property_id', $propertyId))->latest('id')->first();
    }
}
