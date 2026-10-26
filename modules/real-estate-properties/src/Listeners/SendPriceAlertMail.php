<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Liberu\RealEstate\Properties\Domain\Events\PriceAlertTriggered;
use Liberu\RealEstate\Properties\Mail\PriceAlertMail;

final class SendPriceAlertMail implements ShouldQueue
{
    public function handle(PriceAlertTriggered $event): void
    {
        $email = $event->alert->user?->email;

        if (! $email) {
            return;
        }

        Mail::to($email)->queue(new PriceAlertMail($event->alert, $event->property, $event->percentageChange));
    }
}
