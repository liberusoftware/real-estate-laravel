<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Parties\Domain\Events;

use Liberu\RealEstate\Parties\Models\ContactMessage;

final class ContactMessageReceived
{
    public function __construct(
        public readonly ContactMessage $message,
    ) {}
}
