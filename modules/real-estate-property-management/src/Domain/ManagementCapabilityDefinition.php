<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Domain;

final class ManagementCapabilityDefinition
{
    /** @return array<string, array{label: string, required: array<int, string>}> */
    public static function all(): array
    {
        return [
            ManagementCapability::RentSchedule->value => ['label' => 'Rent schedule', 'required' => ['frequency', 'amount']],
            ManagementCapability::Statements->value => ['label' => 'Statements', 'required' => ['period', 'entries']],
            ManagementCapability::Inspections->value => ['label' => 'Inspections', 'required' => ['inspection_date', 'outcome']],
            ManagementCapability::Compliance->value => ['label' => 'Compliance', 'required' => ['requirement', 'expires_at']],
            ManagementCapability::Maintenance->value => ['label' => 'Maintenance', 'required' => ['description', 'priority']],
            ManagementCapability::Contractors->value => ['label' => 'Contractors', 'required' => ['contractor_id', 'scope']],
            ManagementCapability::OwnerApprovals->value => ['label' => 'Owner approvals', 'required' => ['decision', 'decided_at']],
        ];
    }
}
