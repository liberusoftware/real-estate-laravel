<?php

namespace Liberu\RealEstate\Application\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\RealEstate\Application\Models\User;
use Symfony\Component\HttpFoundation\Response;

final class ApplyTeamIntegrationSettings
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $tenant = Filament::getTenant();
        $team = $user instanceof User
            ? (Filament::getCurrentPanel()?->getId() === 'admin' && $tenant !== null && $user->canAccessTenant($tenant)
                ? $tenant : $user->latestTeam)
            : null;

        $original = [];
        if ($team !== null) {
            $settings = (array) app(ScopedSettings::class)->resolve(
                'team.integrations',
                ['team' => $team->getKey()],
                [],
            );

            if (isset($settings['portal_timeout'])) {
                foreach (['rightmove', 'zoopla', 'onthemarket'] as $portal) {
                    $original[$portal.'.timeout'] = config($portal.'.timeout');
                    config([$portal.'.timeout' => (int) $settings['portal_timeout']]);
                }
            }

            foreach ([
                'openai_api_key' => 'services.openai.api_key',
                'walkscore_api_key' => 'services.walkscore.api_key',
                'rightmove_client_id' => 'rightmove.client_id',
                'rightmove_client_secret' => 'rightmove.client_secret',
                'zoopla_certificate' => 'zoopla.certificate',
                'zoopla_key' => 'zoopla.key',
                'zoopla_key_password' => 'zoopla.key_password',
                'onthemarket_certificate' => 'onthemarket.certificate',
                'onthemarket_key' => 'onthemarket.key',
                'onthemarket_key_password' => 'onthemarket.key_password',
            ] as $teamKey => $configKey) {
                if (filled($settings[$teamKey] ?? null)) {
                    $original[$configKey] = config($configKey);
                    config([$configKey => $settings[$teamKey]]);
                }
            }
        }

        try {
            return $next($request);
        } finally {
            // Long-lived workers must not carry one workspace's credentials into the next request.
            config($original);
        }
    }
}
