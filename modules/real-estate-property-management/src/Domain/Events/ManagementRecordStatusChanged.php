<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Domain\Events;

use Liberu\RealEstate\PropertyManagement\Domain\ManagementStatus;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final readonly class ManagementRecordStatusChanged
{
    public function __construct(public ManagementRecord $record, public ManagementStatus $from, public ManagementStatus $to, public int|string $actorId) {}
}
