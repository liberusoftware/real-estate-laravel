<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Marketing\Domain\Events;

use Liberu\RealEstate\Marketing\Models\MarketingCampaign;

final class MarketingCampaignDispatched
{
    public function __construct(
        public readonly MarketingCampaign $campaign,
        public readonly int $recipientCount,
    ) {}
}
