<?php

use Illuminate\Support\Facades\Route;
use Liberu\Foundation\Identity\Socialstream\Http\Controllers\TelegramAuthController;

// Deliberately not /oauth/telegram/callback — that exact shape collides
// with Socialstream's own generic /oauth/{provider}/callback route
// (matches "telegram" as the wildcard), and whichever provider registered
// its routes first wins the match regardless of specificity. "verify"
// instead of "callback" as the literal second segment sidesteps the
// collision while staying under /oauth/, which nginx already proxies to
// this app — a new top-level prefix falls through to the Nuxt frontend.
Route::middleware('web')
    ->get('/oauth/telegram/verify', [TelegramAuthController::class, 'callback'])
    ->name('oauth.telegram.callback');
