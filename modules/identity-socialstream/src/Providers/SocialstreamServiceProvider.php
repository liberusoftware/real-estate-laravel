<?php

namespace Liberu\Foundation\Identity\Socialstream\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use JoelButcher\Socialstream\Concerns\ConfirmsFilament;
use JoelButcher\Socialstream\Contracts\OAuthLoginResponse;
use JoelButcher\Socialstream\Contracts\OAuthRegisterResponse;
use JoelButcher\Socialstream\Events\NewOAuthRegistration;
use JoelButcher\Socialstream\Socialstream;
use Liberu\Foundation\Identity\Socialstream\Actions\CreateConnectedAccount;
use Liberu\Foundation\Identity\Socialstream\Actions\CreateUserFromProvider;
use Liberu\Foundation\Identity\Socialstream\Actions\GenerateRedirectForProvider;
use Liberu\Foundation\Identity\Socialstream\Actions\HandleInvalidState;
use Liberu\Foundation\Identity\Socialstream\Actions\ResolveSocialiteUser;
use Liberu\Foundation\Identity\Socialstream\Actions\UpdateConnectedAccount;
use Liberu\Foundation\Identity\Socialstream\Http\Responses\SpaAwareOAuthResponse;
use Liberu\Foundation\Identity\Socialstream\Listeners\SyncNewOAuthUserToCrm;
use Liberu\Foundation\Identity\Socialstream\Models\ConnectedAccount;
use Liberu\Foundation\Identity\Socialstream\Policies\ConnectedAccountPolicy;

class SocialstreamServiceProvider extends ServiceProvider
{
    use ConfirmsFilament;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Socialstream resets its default model while booting; override it in boot().
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Socialstream::useConnectedAccountModel(ConnectedAccount::class);
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        Gate::policy(ConnectedAccount::class, ConnectedAccountPolicy::class);
        Socialstream::resolvesSocialiteUsersUsing(ResolveSocialiteUser::class);
        Socialstream::createUsersFromProviderUsing(CreateUserFromProvider::class);
        Socialstream::createConnectedAccountsUsing(CreateConnectedAccount::class);
        Socialstream::updateConnectedAccountsUsing(UpdateConnectedAccount::class);
        Socialstream::handlesInvalidStateUsing(HandleInvalidState::class);
        Socialstream::generatesProvidersRedirectsUsing(GenerateRedirectForProvider::class);

        // Decorates whatever Socialstream already bound (its own session-flow
        // responses) rather than replacing them — see SpaAwareOAuthResponse.
        $this->app->extend(OAuthLoginResponse::class, fn ($default) => new SpaAwareOAuthResponse($default));
        $this->app->extend(OAuthRegisterResponse::class, fn ($default) => new SpaAwareOAuthResponse($default));

        Event::listen(NewOAuthRegistration::class, SyncNewOAuthUserToCrm::class);
    }
}
