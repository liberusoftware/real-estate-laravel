<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Application;

use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\Foundation\Audit\Contracts\AuditRecorder;
use Liberu\Foundation\Audit\Support\AuditContext;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;

final class TransitionProperty
{
    public function handle(
        int|string $teamId,
        int|string $actorId,
        int|string $propertyId,
        PropertyStatus $status,
    ): Property {
        return DB::transaction(function () use ($teamId, $actorId, $propertyId, $status): Property {
            $property = Property::query()->forTeam($teamId)->findOrFail($propertyId);
            if (! $this->canTransition($property->status, $status)) {
                throw ValidationException::withMessages(['status' => 'That property status transition is not allowed.']);
            }

            $values = ['status' => $status];
            if (in_array($status, [PropertyStatus::Available, PropertyStatus::Published], true) && $property->published_at === null) {
                $values['published_at'] = now();
            }
            $from = $property->getRawOriginal('status');
            $property->forceFill($values)->save();
            $property->history()->create([
                'team_id' => $teamId,
                'actor_id' => $actorId,
                'event' => 'status_changed',
                'changes' => ['from' => $from, 'to' => $status->value],
            ]);

            app(AuditRecorder::class)->record(
                event: 'property.status_changed',
                subjectType: Property::class,
                subjectId: $property->getKey(),
                before: ['status' => $from],
                after: ['status' => $status->value],
                context: new AuditContext(
                    actorId: $actorId,
                    actorType: config('auth.providers.users.model'),
                    tenantId: (string) $teamId,
                    requestId: null,
                    correlationId: Context::get('correlation_id'),
                ),
            );

            return $property->fresh('history');
        });
    }

    private function canTransition(PropertyStatus $from, PropertyStatus $to): bool
    {
        return match ($from) {
            PropertyStatus::Draft => in_array($to, [PropertyStatus::Available, PropertyStatus::Withdrawn, PropertyStatus::Moderation, PropertyStatus::Published, PropertyStatus::Archive], true),
            PropertyStatus::Available => in_array($to, [PropertyStatus::UnderOffer, PropertyStatus::Sold, PropertyStatus::Let, PropertyStatus::Withdrawn], true),
            PropertyStatus::UnderOffer => in_array($to, [PropertyStatus::Available, PropertyStatus::Sold, PropertyStatus::Withdrawn], true),
            PropertyStatus::Moderation => in_array($to, [PropertyStatus::Draft, PropertyStatus::Published, PropertyStatus::Archive], true),
            PropertyStatus::Published => in_array($to, [PropertyStatus::Archive, PropertyStatus::Moderation], true),
            PropertyStatus::Archive => in_array($to, [PropertyStatus::Draft, PropertyStatus::Moderation], true),
            PropertyStatus::Sold, PropertyStatus::Let, PropertyStatus::Withdrawn => false,
            default => false,
        };
    }
}
