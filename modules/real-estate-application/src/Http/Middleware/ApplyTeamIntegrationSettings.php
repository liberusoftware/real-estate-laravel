<?php

namespace Liberu\RealEstate\Application\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\RealEstate\Application\Models\User;
use Symfony\Component\HttpFoundation\Response;

final class ApplyTeamIntegrationSettings
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $team = $user instanceof User ? $user->latestTeam : null;

        if ($team !== null) {
            $settings = (array) app(ScopedSettings::class)->resolve(
                'team.integrations',
                ['team' => $team->getKey()],
                [],
            );

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
                    config([$configKey => $settings[$teamKey]]);
                }
            }
        }

        return $next($request);
    }
}
