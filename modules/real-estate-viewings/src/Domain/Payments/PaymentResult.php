<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Domain\Payments;

final readonly class PaymentResult
{
    public function __construct(
        public PaymentStatus $status,
        public ?string $providerReference,
        public ?string $message = null,
    ) {}
}
