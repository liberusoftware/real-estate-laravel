<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Listeners;

use Liberu\RealEstate\Leads\Application\TransitionLead;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;
use Liberu\RealEstate\Offers\Domain\Events\OfferStatusChanged;
use Liberu\RealEstate\Offers\Domain\OfferStatus;
use Liberu\RealEstate\Parties\Models\Party;

/**
 * An offer being submitted/countered advances a lead to Offer; an offer
 * being accepted wins it outright. Rejected/withdrawn is deliberately left
 * alone — it kills that one offer, not necessarily the lead's interest in
 * the platform. Matched the same way as TransitionLeadFromViewing.
 */
final class TransitionLeadFromOffer
{
    public function handle(OfferStatusChanged $event): void
    {
        $offer = $event->offer;

        $target = match ($event->to) {
            OfferStatus::Accepted => LeadStatus::Won,
            OfferStatus::Submitted, OfferStatus::Countered => LeadStatus::Offer,
            default => null,
        };

        if ($target === null) {
            return;
        }

        $lead = $this->findLead($offer->team_id, $offer->property_id, $offer->party_id);

        if ($lead === null || ($target !== LeadStatus::Won && $lead->status->rank() >= $target->rank())) {
            return;
        }

        app(TransitionLead::class)->handle($lead, $offer->team_id, $target);
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
