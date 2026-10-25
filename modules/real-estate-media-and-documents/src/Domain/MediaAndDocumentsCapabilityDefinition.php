<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Domain;

final class MediaAndDocumentsCapabilityDefinition
{
    /** @return array<string, array{label: string, required: list<string>, behaviors: list<string>}> */
    public static function all(): array
    {
        $labels = ['Photos', 'Floorplans', 'Site plans', 'Video', 'Certificates', 'Rights', 'Ordering', 'Brochures', 'Retention', 'Versioned templates', 'Localized demonstrations', 'Signing envelopes', 'Digital signatures', 'Signing audit trail'];
        $result = [];
        foreach ($labels as $label) {
            $key = strtolower(str_replace([' ', '-'], ['_', '_'], $label));
            $result[$key] = ['label' => $label, 'required' => ['team_id', 'file_id', 'rights'], 'behaviors' => ['lifecycle', 'validation', 'authorization', 'failure_recovery', 'audit', 'feedback']];
        }

        return $result;
    }
}
