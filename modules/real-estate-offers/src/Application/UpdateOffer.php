<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Offers\Application;

use Illuminate\Support\Facades\Context;
use Illuminate\Validation\ValidationException;
use Liberu\Foundation\Audit\Contracts\AuditRecorder;
use Liberu\Foundation\Audit\Support\AuditContext;
use Liberu\RealEstate\Offers\Models\Offer;

final class UpdateOffer
{
    public function handle(Offer $offer, int|string $teamId, int|string $actorId, array $attributes): Offer
    {
        abort_unless((string) $offer->team_id === (string) $teamId, 404);
        if (array_key_exists('subject', $attributes) && trim((string) $attributes['subject']) === '') {
            throw ValidationException::withMessages(['subject' => 'An offer subject is required.']);
        }

        $previousAmount = $offer->amount;
        $offer->fill($attributes);
        $offer->save();

        // UpdateOffer had no change tracking at all before this — unlike
        // TransitionOffer, which already logs every status move to events().
        // The amount is the one field here a marketplace needs tamper-evident
        // proof of, since nothing stopped a plain edit from changing it.
        if ($offer->wasChanged('amount')) {
            app(AuditRecorder::class)->record(
                event: 'offer.amount_changed',
                subjectType: Offer::class,
                subjectId: $offer->getKey(),
                before: ['amount' => $previousAmount],
                after: ['amount' => $offer->amount],
                context: new AuditContext(
                    actorId: $actorId,
                    actorType: config('auth.providers.users.model'),
                    tenantId: (string) $teamId,
                    requestId: null,
                    correlationId: Context::get('correlation_id'),
                ),
            );
        }

        return $offer->fresh();
    }
}
