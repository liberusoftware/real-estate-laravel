<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Parties\Domain;

final class PartiesCapabilityDefinition
{
    /** @return array<string, array{label: string, required: list<string>, behaviors: list<string>}> */
    public static function all(): array
    {
        $labels = ['Applicants', 'Vendors', 'Landlords', 'Tenants', 'Buyers', 'Solicitors', 'Contractors', 'Tourists', 'Guides', 'Relationships', 'Consent', 'Landlord reviews', 'Tenant reviews'];
        $result = [];
        foreach ($labels as $label) {
            $key = strtolower($label);
            $result[$key] = ['label' => $label, 'required' => ['team_id', 'name', 'party_type'], 'behaviors' => self::behaviors()];
        }

        return $result;
    }

    /** @return list<string> */
    private static function behaviors(): array
    {
        return ['lifecycle', 'validation', 'authorization', 'failure_recovery', 'audit', 'feedback'];
    }
}
