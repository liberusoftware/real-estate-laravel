<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Domain\Events;

use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;

final class LeadStatusChanged
{
    public function __construct(
        public readonly Lead $lead,
        public readonly LeadStatus $from,
        public readonly LeadStatus $to,
    ) {}
}
