<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Liberu\RealEstate\Leads\Listeners\CreateLeadFromContactMessage;
use Liberu\RealEstate\Leads\Listeners\TransitionLeadFromOffer;
use Liberu\RealEstate\Leads\Listeners\TransitionLeadFromViewing;
use Liberu\RealEstate\Offers\Domain\Events\OfferStatusChanged;
use Liberu\RealEstate\Parties\Domain\Events\ContactMessageReceived;
use Liberu\RealEstate\Viewings\Domain\Events\ViewingCreated;

final class LeadsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Application\CreateLead::class);
        $this->app->singleton(Application\UpdateLead::class);
        $this->app->singleton(Application\TransitionLead::class);
        $this->app->singleton(Application\AssignLead::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        Event::listen(ContactMessageReceived::class, CreateLeadFromContactMessage::class);
        Event::listen(ViewingCreated::class, TransitionLeadFromViewing::class);
        Event::listen(OfferStatusChanged::class, TransitionLeadFromOffer::class);
    }
}
