<?php

use Illuminate\Support\Facades\Route;
use Liberu\Foundation\IdentityCoreApi\Http\Controllers\AuthTokenController;

Route::post('api/v1/auth/token', [AuthTokenController::class, 'store'])
    ->middleware(['api', 'throttle:6,1'])
    ->name('identity.auth-token.store');

Route::delete('api/v1/auth/token', [AuthTokenController::class, 'destroy'])
    ->middleware(['api', 'auth:sanctum'])
    ->name('identity.auth-token.destroy');

Route::post('api/v1/auth/register', [AuthTokenController::class, 'register'])
    ->middleware(['api', 'throttle:6,1'])
    ->name('identity.auth-token.register');
