<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Liberu\RealEstate\Properties\Domain\Events\SavedSearchAlertTriggered;
use Liberu\RealEstate\Properties\Mail\SavedSearchAlertMail;

final class SendSavedSearchAlertMail implements ShouldQueue
{
    public function handle(SavedSearchAlertTriggered $event): void
    {
        $email = $event->savedSearch->user?->email;

        if (! $email) {
            return;
        }

        Mail::to($email)->queue(new SavedSearchAlertMail($event->savedSearch, $event->properties));
    }
}
