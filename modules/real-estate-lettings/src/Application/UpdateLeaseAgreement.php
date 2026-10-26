<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Lettings\Domain\LeaseAgreementStatus;
use Liberu\RealEstate\Lettings\Models\LeaseAgreement;

final class UpdateLeaseAgreement
{
    /** @param array<string, mixed> $attributes */
    public function handle(LeaseAgreement $agreement, int|string $teamId, array $attributes): LeaseAgreement
    {
        if ((string) $agreement->team_id !== (string) $teamId) {
            throw ValidationException::withMessages(['agreement' => 'The lease agreement does not belong to this team.']);
        }

        if (isset($attributes['start_date'], $attributes['end_date'])
            && now()->parse($attributes['end_date'])->lte(now()->parse($attributes['start_date']))) {
            throw ValidationException::withMessages(['end_date' => 'The end date must be after the start date.']);
        }

        if (isset($attributes['status']) && LeaseAgreementStatus::tryFrom((string) $attributes['status']) === null) {
            throw ValidationException::withMessages(['status' => 'Select a valid tenancy agreement status.']);
        }

        return DB::transaction(function () use ($agreement, $attributes): LeaseAgreement {
            $agreement->update($attributes);

            return $agreement->fresh();
        });
    }
}
