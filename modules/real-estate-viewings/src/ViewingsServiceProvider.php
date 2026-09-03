<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings;

use Illuminate\Support\ServiceProvider;

final class ViewingsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function register(): void
    {
        // No real merchant agreement exists yet (see NullPaymentGateway) —
        // swap this binding for a real provider once one does. Nothing
        // else in the codebase depends on NullPaymentGateway directly.
        $this->app->bind(Domain\Payments\PaymentGateway::class, Domain\Payments\NullPaymentGateway::class);

        $this->app->singleton(Application\CreateViewing::class);
        $this->app->singleton(Application\UpdateViewing::class);
        $this->app->singleton(Application\DeleteViewing::class);
        $this->app->singleton(Application\ConfirmViewing::class);
        $this->app->singleton(Application\CompleteViewing::class);
        $this->app->singleton(Application\CancelViewing::class);
        $this->app->singleton(Application\MarkViewingNoShow::class);
        $this->app->singleton(Application\RequestViewingFeedback::class);
        $this->app->singleton(Application\SubmitViewingFeedback::class);
        $this->app->singleton(Application\SummarizeViewingFeedback::class);
    }
}
