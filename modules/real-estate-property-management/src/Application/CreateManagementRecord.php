<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\PropertyManagement\Domain\Events\ManagementRecordCreated;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementCapability;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementStatus;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class CreateManagementRecord
{
    public function handle(int|string $teamId, int|string $actorId, array $attributes): ManagementRecord
    {
        $subject = trim((string) ($attributes['subject'] ?? ''));
        $capability = (string) ($attributes['capability'] ?? '');
        if ($subject === '') {
            throw ValidationException::withMessages(['subject' => 'A management subject is required.']);
        }
        if (ManagementCapability::tryFrom($capability) === null) {
            throw ValidationException::withMessages(['capability' => 'Select a valid management capability.']);
        }

        $record = DB::transaction(fn (): ManagementRecord => ManagementRecord::query()->create([
            'team_id' => $teamId,
            'created_by' => $actorId,
            'property_id' => $attributes['property_id'] ?? null,
            'party_id' => $attributes['party_id'] ?? null,
            'subject' => $subject,
            'capability' => $capability,
            'status' => ManagementStatus::Draft,
            'details' => $attributes['details'] ?? [],
            'audit' => [['event' => 'created', 'actor_id' => $actorId, 'at' => now()->toISOString()]],
        ]));

        event(new ManagementRecordCreated($record, $actorId));

        return $record;
    }
}
