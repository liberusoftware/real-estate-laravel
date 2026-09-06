<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Domain\Payments;

/**
 * Contract every payment provider (Alif Pay, a bank's own gateway, ...)
 * will implement once ihona.tj has a real merchant agreement. Nothing in
 * this module calls charge() yet — see NullPaymentGateway, the only bound
 * implementation for now. Swapping providers later means binding a
 * different class in ViewingsServiceProvider, not touching any call site.
 */
interface PaymentGateway
{
    public function charge(PaymentRequest $request): PaymentResult;
}
