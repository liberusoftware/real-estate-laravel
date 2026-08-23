<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Domain\Events;

use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final readonly class ManagementRecordCreated
{
    public function __construct(public ManagementRecord $record, public int|string $actorId) {}
}
