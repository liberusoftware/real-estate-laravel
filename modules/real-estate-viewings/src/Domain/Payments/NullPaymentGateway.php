<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Domain\Payments;

/**
 * No real gateway is configured yet, so bookings remain pending without a
 * provider reference until a merchant agreement is configured.
 * Always returns Pending with no provider reference, so nothing downstream
 * can mistake this for a real charge. Bound as the default PaymentGateway
 * in ViewingsServiceProvider; swap that binding for a real implementation
 * once a merchant agreement exists — every call site already depends on
 * the PaymentGateway interface, not this class.
 */
final class NullPaymentGateway implements PaymentGateway
{
    public function charge(PaymentRequest $request): PaymentResult
    {
        return new PaymentResult(
            status: PaymentStatus::Pending,
            providerReference: null,
            message: 'No payment gateway is configured yet — the booking stays confirmed without prepayment.',
        );
    }
}
