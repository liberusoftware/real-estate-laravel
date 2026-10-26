<?php

declare(strict_types=1);

namespace Liberu\Foundation\Identity\Socialstream\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\RedirectResponse;
use JoelButcher\Socialstream\Contracts\OAuthLoginResponse;
use JoelButcher\Socialstream\Contracts\OAuthRegisterResponse;

/**
 * Google/Telegram login can be initiated from either the session-based
 * Blade/Filament panels or the Nuxt SPA (which authenticates with a
 * Sanctum bearer token, not a session — see identity-core-api's
 * AuthTokenController). GenerateRedirectForProvider and
 * TelegramAuthController stash a session flag when the request carries
 * ?spa=1; this decorator checks it and, when set, mints the same shaped
 * token the SPA's own /v1/auth/token endpoint returns and redirects back
 * into the SPA instead of the session-flow's normal destination. Wraps
 * whatever was already bound (Socialstream's own responses) rather than
 * replacing them, so the session flow is untouched.
 */
class SpaAwareOAuthResponse implements OAuthLoginResponse, OAuthRegisterResponse
{
    public function __construct(private readonly Responsable $default) {}

    public function toResponse($request)
    {
        if (! session()->pull('socialstream.spa_redirect')) {
            return $this->default->toResponse($request);
        }

        $user = $request->user();
        $token = $user->createToken(config('services.frontend.token_name', 'frontend'))->plainTextToken;

        $query = http_build_query([
            'token' => $token,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);

        return new RedirectResponse(url((string) config('services.frontend.oauth_callback_url', '/account/oauth-callback'))."#{$query}");
    }
}
