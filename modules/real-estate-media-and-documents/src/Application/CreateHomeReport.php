<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Application;

use Liberu\RealEstate\MediaAndDocuments\Models\HomeReport;
use Liberu\RealEstate\Properties\Models\Property;

final class CreateHomeReport
{
    public function handle(Property $property, int|string $userId, array $data): HomeReport
    {
        $band = $data['energy_band'] ?? null;
        if ($band !== null && ! in_array($band, ['A', 'B', 'C', 'D', 'E', 'F', 'G'], true)) {
            throw new \InvalidArgumentException('Invalid energy band.');
        }$condition = (string) ($data['property_condition'] ?? '1');
        if (! in_array($condition, ['1', '2', '3', '4'], true)) {
            throw new \InvalidArgumentException('Invalid condition.');
        }

        return HomeReport::create([...$data, 'team_id' => $property->team_id, 'created_by' => $userId, 'property_id' => $property->getKey(), 'property_condition' => $condition]);
    }
}
