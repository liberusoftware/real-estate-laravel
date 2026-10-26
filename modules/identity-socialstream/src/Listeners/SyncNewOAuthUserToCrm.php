<?php

declare(strict_types=1);

namespace Liberu\Foundation\Identity\Socialstream\Listeners;

use JoelButcher\Socialstream\Events\NewOAuthRegistration;
use Liberu\Foundation\Identity\Jobs\SyncNewUserToCrm;

/**
 * Google and Telegram registrations both fire this one event (Telegram's
 * TelegramAuthController routes through the same AuthenticatesOAuthCallback
 * pipeline), so one listener covers the CRM sync for every OAuth provider —
 * see AuthTokenController::register() for the plain email/password path,
 * which fires SyncNewUserToCrm directly instead of through an event.
 */
class SyncNewOAuthUserToCrm
{
    public function handle(NewOAuthRegistration $event): void
    {
        SyncNewUserToCrm::dispatch(
            $event->user->id,
            $event->provider,
            [
                'locale' => app()->getLocale(),
                'team_id' => $event->user->currentTeam?->id,
            ],
            [
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'referer' => request()->header('referer'),
                'registered_at' => $event->user->created_at?->toIso8601String(),
                'provider_id' => $event->providerAccount->getId(),
                'provider_nickname' => $event->providerAccount->getNickname(),
            ],
        );
    }
}
