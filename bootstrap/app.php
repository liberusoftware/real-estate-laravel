<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Liberu\Foundation\ApplicationCore\Http\Middleware\SecurityHeaders;
use Liberu\Foundation\Localization\Http\Middleware\SetLocale;
use Sentry\Laravel\Integration;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->appendToGroup('web', [SetLocale::class, SecurityHeaders::class]);

        // Only 20 of 46 `-api` module route files add `throttle:api`
        // themselves; the other 26 (mostly the boilerplate /status health
        // checks) had no rate limiting at all. throttleApi() puts every
        // route in the 'api' group behind the 'api' limiter — already
        // defined in ApiAccessServiceProvider::boot() — by default, so a
        // module route stays protected even if it forgets the middleware
        // itself. Per-route `throttle:api` remains harmless (same limiter).
        $middleware->throttleApi();
        $middleware->statefulApi();

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );

        // No-ops with no DSN configured (same opt-in-via-env pattern as
        // analytics-google/analytics-meta) — set SENTRY_LARAVEL_DSN to
        // start reporting.
        Integration::handles($exceptions);
    })->create();
