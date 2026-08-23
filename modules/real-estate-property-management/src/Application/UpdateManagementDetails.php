<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementCapability;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementCapabilityDefinition;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class UpdateManagementDetails
{
    public function handle(ManagementRecord $record, int|string $teamId, int|string $actorId, array $details): ManagementRecord
    {
        if ((string) $record->team_id !== (string) $teamId) {
            abort(404);
        }
        $capability = ManagementCapability::from((string) $record->capability);
        $required = ManagementCapabilityDefinition::all()[$capability->value]['required'];
        $missing = array_values(array_filter($required, fn (string $key): bool => ! array_key_exists($key, $details)));
        if ($missing !== []) {
            throw ValidationException::withMessages(['details' => 'Missing required capability data: '.implode(', ', $missing).'.']);
        }
        $record->forceFill([
            'details' => $details,
            'audit' => [...($record->audit ?? []), ['event' => 'details_updated', 'actor_id' => $actorId, 'at' => now()->toISOString()]],
        ])->save();

        return $record->refresh();
    }
}
