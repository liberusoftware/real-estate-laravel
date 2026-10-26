<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Liberu\RealEstate\Properties\Domain\Events\PriceAlertTriggered;
use Liberu\RealEstate\Properties\Domain\Events\SavedSearchAlertTriggered;
use Liberu\RealEstate\Properties\Listeners\SendPriceAlertMail;
use Liberu\RealEstate\Properties\Listeners\SendSavedSearchAlertMail;

final class PropertiesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Application\CreateProperty::class);
        $this->app->singleton(Application\UpsertPropertyUnit::class);
        $this->app->singleton(Application\RecordPropertyKey::class);
        $this->app->singleton(Application\TogglePropertyFavorite::class);
        $this->app->singleton(Application\RemovePropertyFavorite::class);
        $this->app->singleton(Application\SavePropertySearch::class);
        $this->app->singleton(Application\DeletePropertySearch::class);
        $this->app->singleton(Application\SubmitPropertyReview::class);
        $this->app->singleton(Application\SubmitNeighborhoodReview::class);
        $this->app->singleton(Application\CreatePriceAlert::class);
        $this->app->singleton(Application\UpdatePriceAlert::class);
        $this->app->singleton(Application\DeletePriceAlert::class);
        $this->app->singleton(Application\TogglePriceAlert::class);
        $this->app->singleton(Application\CheckPriceAlerts::class);
        $this->app->singleton(Application\ConfigurePropertyArTour::class);
        $this->app->singleton(Application\CheckSavedSearchAlerts::class);
        $this->app->singleton(Application\FetchWalkabilityScores::class);
        $this->app->singleton(Application\GeneratePropertyQrCode::class);
        $this->app->singleton(Application\SendPropertyToFriend::class);
        $this->app->singleton(Application\GeneratePropertyDescription::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // PriceAlertTriggered was already being dispatched by
        // CheckPriceAlerts with no listener anywhere in the codebase — the
        // event fired into the void and no alert email was ever sent.
        Event::listen(PriceAlertTriggered::class, SendPriceAlertMail::class);
        Event::listen(SavedSearchAlertTriggered::class, SendSavedSearchAlertMail::class);
    }
}
