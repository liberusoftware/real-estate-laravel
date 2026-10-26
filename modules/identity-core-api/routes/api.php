<?php

use Illuminate\Support\Facades\Route;
use Liberu\Foundation\IdentityCoreApi\Http\Controllers\AuthTokenController;

// Token clients use the API group; stateful SPA clients use Sanctum session authentication.
Route::post('api/v1/auth/token', [AuthTokenController::class, 'store'])
    ->middleware(['api', 'throttle:6,1'])
    ->name('identity.auth-token.store');

Route::delete('api/v1/auth/token', [AuthTokenController::class, 'destroy'])
    ->middleware(['api', 'auth:sanctum'])
    ->name('identity.auth-token.destroy');

// Rehydrates {id, name, email, roles} from a stored Bearer token alone —
// the agent cabinet's auth store needs this on every page load/refresh
// (localStorage only ever kept the token, never the roles that came back
// from login), the storefront doesn't call it today but gets it for free.
Route::get('api/v1/auth/user', [AuthTokenController::class, 'show'])
    ->middleware(['api', 'auth:sanctum'])
    ->name('identity.auth-token.show');

Route::post('api/v1/auth/register', [AuthTokenController::class, 'register'])
    ->middleware(['api', 'throttle:6,1'])
    ->name('identity.auth-token.register');
