<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Application;

use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Lettings\Domain\LettingCapability;
use Liberu\RealEstate\Lettings\Domain\LettingCapabilityDefinition;
use Liberu\RealEstate\Lettings\Models\Letting;

final class UpdateLettingDetails
{
    public function handle(Letting $letting, int|string $teamId, int|string $actorId, array $details): Letting
    {
        if ((string) $letting->team_id !== (string) $teamId) {
            abort(404);
        }
        $capability = LettingCapability::from((string) $letting->capability);
        $required = LettingCapabilityDefinition::all()[$capability->value]['required'];
        $missing = array_values(array_filter($required, fn (string $key): bool => ! array_key_exists($key, $details)));
        if ($missing !== []) {
            throw ValidationException::withMessages(['details' => 'Missing required capability data: '.implode(', ', $missing).'.']);
        }
        $letting->forceFill([
            'details' => $details,
            'audit' => [...($letting->audit ?? []), ['event' => 'details_updated', 'actor_id' => $actorId, 'at' => now()->toISOString()]],
        ])->save();

        return $letting->refresh();
    }
}
