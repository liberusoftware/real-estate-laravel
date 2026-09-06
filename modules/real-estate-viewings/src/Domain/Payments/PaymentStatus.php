<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Domain\Payments;

enum PaymentStatus: string
{
    case Pending = 'pending';
    case Succeeded = 'succeeded';
    case Failed = 'failed';
}
