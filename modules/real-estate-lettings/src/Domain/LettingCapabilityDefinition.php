<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Domain;

final class LettingCapabilityDefinition
{
    /** @return array<string, array{label: string, required: array<int, string>}> */
    public static function all(): array
    {
        return [
            LettingCapability::Applications->value => ['label' => 'Applications', 'required' => ['applicant_id']],
            LettingCapability::Referencing->value => ['label' => 'Referencing', 'required' => ['provider', 'outcome']],
            LettingCapability::Deposits->value => ['label' => 'Deposits', 'required' => ['amount', 'scheme']],
            LettingCapability::Agreements->value => ['label' => 'Agreements', 'required' => ['start_date', 'term_months']],
            LettingCapability::MoveInOut->value => ['label' => 'Move-in/out', 'required' => ['inspection_date', 'inventory']],
            LettingCapability::Renewals->value => ['label' => 'Renewals', 'required' => ['renewal_date']],
            LettingCapability::RentChanges->value => ['label' => 'Rent changes', 'required' => ['effective_date', 'amount']],
            LettingCapability::Notices->value => ['label' => 'Notices', 'required' => ['notice_type', 'served_at']],
        ];
    }
}
