<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Offers\Application;

use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Validation\ValidationException;
use Liberu\Foundation\Audit\Contracts\AuditRecorder;
use Liberu\Foundation\Audit\Support\AuditContext;
use Liberu\RealEstate\Offers\Domain\Events\OfferStatusChanged;
use Liberu\RealEstate\Offers\Domain\OfferStatus;
use Liberu\RealEstate\Offers\Models\Offer;

final class TransitionOffer
{
    public function handle(Offer $offer, int|string $teamId, int|string $actorId, OfferStatus $status, array $attributes = []): Offer
    {
        abort_unless((string) $offer->team_id === (string) $teamId, 404);
        if (! $offer->canTransitionTo($status)) {
            throw ValidationException::withMessages(['status' => "An offer cannot transition from {$offer->status->value} to {$status->value}."]);
        }
        if ($status === OfferStatus::Accepted && $offer->property_id !== null && Offer::query()->forTeam($teamId)->where('property_id', $offer->property_id)->where('status', OfferStatus::Accepted)->where('id', '<>', $offer->id)->exists()) {
            throw ValidationException::withMessages(['status' => 'Another offer for this property is already accepted.']);
        }

        return DB::transaction(function () use ($offer, $teamId, $actorId, $status, $attributes): Offer {
            $before = $offer->replicate();
            $offer->fill(array_merge($attributes, ['status' => $status, 'responded_at' => in_array($status, [OfferStatus::Accepted, OfferStatus::Rejected, OfferStatus::Withdrawn], true) ? now() : $offer->responded_at]));
            $offer->save();
            $offer->events()->create(['team_id' => $teamId, 'actor_id' => $actorId, 'event_type' => $status->value, 'previous_amount' => $before->amount, 'amount' => $offer->amount, 'previous_status' => $before->status, 'status' => $status, 'note' => $attributes['note'] ?? null, 'changes' => $offer->getChanges(), 'occurred_at' => now()]);

            app(AuditRecorder::class)->record(
                event: 'offer.status_changed',
                subjectType: Offer::class,
                subjectId: $offer->getKey(),
                before: ['status' => $before->status?->value, 'amount' => $before->amount],
                after: ['status' => $status->value, 'amount' => $offer->amount],
                context: new AuditContext(
                    actorId: $actorId,
                    actorType: config('auth.providers.users.model'),
                    tenantId: (string) $teamId,
                    requestId: null,
                    correlationId: Context::get('correlation_id'),
                ),
            );

            // Submitting, countering or accepting an offer is a pipeline
            // signal for real-estate-leads' TransitionLeadFromOffer, which
            // advances (or wins) the matching lead without a manual sync.
            Event::dispatch(new OfferStatusChanged($offer, $before->status, $status));

            return $offer->fresh();
        });
    }
}
