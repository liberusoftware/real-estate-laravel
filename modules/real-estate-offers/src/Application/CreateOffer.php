<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Offers\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Offers\Domain\OfferStatus;
use Liberu\RealEstate\Offers\Models\Offer;

final class CreateOffer
{
    public function handle(int|string $teamId, int|string $actorId, array $attributes): Offer
    {
        $subject = trim((string) ($attributes['subject'] ?? ''));
        $amount = $attributes['amount'] ?? null;
        if ($subject === '') {
            throw ValidationException::withMessages(['subject' => 'An offer subject is required.']);
        }if ($amount === null || ! is_numeric($amount) || $amount < 0) {
            throw ValidationException::withMessages(['amount' => 'A non-negative offer amount is required.']);
        }

        return DB::transaction(function () use ($teamId, $actorId, $attributes, $subject, $amount): Offer {
            $offer = Offer::query()->create(['team_id' => $teamId, 'created_by' => $actorId, 'property_id' => $attributes['property_id'] ?? null, 'party_id' => $attributes['party_id'] ?? null, 'subject' => $subject, 'amount' => $amount, 'currency' => $attributes['currency'] ?? config('app.currency', 'USD'), 'status' => OfferStatus::Draft, 'terms' => $attributes['terms'] ?? [], 'qualification' => $attributes['qualification'] ?? [], 'negotiation' => $attributes['negotiation'] ?? [], 'proof' => $attributes['proof'] ?? [], 'decision_history' => $attributes['decision_history'] ?? [], 'accepted_controls' => $attributes['accepted_controls'] ?? [], 'offered_at' => $attributes['offered_at'] ?? now(), 'mortgage_status' => $attributes['mortgage_status'] ?? null, 'chain_information' => $attributes['chain_information'] ?? null, 'conditions' => $attributes['conditions'] ?? null]);
            $offer->events()->create(['team_id' => $teamId, 'actor_id' => $actorId, 'event_type' => 'created', 'amount' => $amount, 'status' => OfferStatus::Draft, 'changes' => ['subject' => $subject, 'amount' => $amount], 'occurred_at' => now()]);

            return $offer;
        });
    }
}
