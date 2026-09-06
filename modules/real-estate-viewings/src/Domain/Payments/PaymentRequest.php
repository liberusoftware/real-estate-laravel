<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Domain\Payments;

final readonly class PaymentRequest
{
    /** @param array<string, mixed> $metadata */
    public function __construct(
        public int $amountMinorUnits,
        public string $currency,
        public string $description,
        public array $metadata = [],
    ) {}
}
