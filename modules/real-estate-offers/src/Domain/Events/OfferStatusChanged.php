<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Offers\Domain\Events;

use Liberu\RealEstate\Offers\Domain\OfferStatus;
use Liberu\RealEstate\Offers\Models\Offer;

final class OfferStatusChanged
{
    public function __construct(
        public readonly Offer $offer,
        public readonly OfferStatus $from,
        public readonly OfferStatus $to,
    ) {}
}
