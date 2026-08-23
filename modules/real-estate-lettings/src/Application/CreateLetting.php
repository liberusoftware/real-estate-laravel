<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Lettings\Domain\LettingCapability;
use Liberu\RealEstate\Lettings\Domain\LettingStatus;
use Liberu\RealEstate\Lettings\Models\Letting;

final class CreateLetting
{
    public function handle(int|string $teamId, int|string $actorId, array $attributes): Letting
    {
        $subject = trim((string) ($attributes['subject'] ?? ''));
        $capability = (string) ($attributes['capability'] ?? '');
        if ($subject === '') {
            throw ValidationException::withMessages(['subject' => 'A letting subject is required.']);
        }
        if (LettingCapability::tryFrom($capability) === null) {
            throw ValidationException::withMessages(['capability' => 'Select a valid letting capability.']);
        }

        return DB::transaction(fn (): Letting => Letting::query()->create(['team_id' => $teamId, 'created_by' => $actorId, 'property_id' => $attributes['property_id'] ?? null, 'party_id' => $attributes['party_id'] ?? null, 'subject' => $subject, 'capability' => $capability, 'status' => LettingStatus::Draft, 'details' => $attributes['details'] ?? [], 'audit' => [['event' => 'created', 'actor_id' => $actorId, 'at' => now()->toISOString()]]]));
    }
}
