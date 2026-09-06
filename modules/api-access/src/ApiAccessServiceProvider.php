<?php

namespace Liberu\Foundation\ApiAccess;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Liberu\Foundation\ApiAccess\Http\Middleware\Idempotency;

final class ApiAccessServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/api-access.php', 'api-access');
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->app['router']->aliasMiddleware('api.idempotency', Idempotency::class);

        // Every -api module's routes carry `throttle:api` but nothing ever
        // defined the 'api' limiter itself — every one of those routes 500s
        // ("Rate limiter [api] is not defined") the moment it's hit over
        // real HTTP. config('api-access.rate_limit') ("60,1" = 60/min) was
        // already there, unused — this is what it was for.
        RateLimiter::for('api', function (Request $request) {
            [$max, $minutes] = array_pad(explode(',', (string) config('api-access.rate_limit', '60,1'), 2), 2, '1');

            return Limit::perMinutes((int) $minutes, (int) $max)->by($request->user()?->getAuthIdentifier() ?? $request->ip());
        });
    }
}
