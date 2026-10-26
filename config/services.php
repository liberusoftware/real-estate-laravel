<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Resend, Postmark, AWS, and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_REDIRECT_URI', '/oauth/github/callback'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI', '/oauth/google/callback'),
    ],

    // Not a Socialite provider — Telegram's Login Widget signs its own
    // redirect payload with the bot token instead of an OAuth handshake.
    // Verified in identity-socialstream's TelegramAuthController.
    'telegram' => [
        'bot_username' => env('TELEGRAM_BOT_USERNAME'),
        'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    ],

    // The standalone liberu CRM (crm-laravel) — opt-in, no-ops with either
    // unset. See identity-core's SyncNewUserToCrm.
    'frontend' => [
        'token_name' => env('FRONTEND_TOKEN_NAME', 'frontend'),
        'oauth_callback_url' => env('FRONTEND_OAUTH_CALLBACK_URL', '/account/oauth-callback'),
    ],

    'crm' => [
        'external_key_prefix' => env('CRM_EXTERNAL_KEY_PREFIX', 'user-'),
        'base_url' => env('CRM_API_BASE_URL'),
        'token' => env('CRM_API_TOKEN'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT_URI', '/oauth/facebook/callback'),
    ],

    'openai' => [
        'api_key' => env('OPENAI_API_KEY'),
        'endpoint' => env('OPENAI_API_ENDPOINT', 'https://api.openai.com/v1/chat/completions'),
        'model' => env('OPENAI_MODEL', 'gpt-3.5-turbo'),
    ],

    'twitter-oauth-2' => [
        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
        'redirect' => env('TWITTER_REDIRECT_URI', '/oauth/twitter-oauth-2/callback'),
    ],

    'walkscore' => [
        'api_key' => env('WALKSCORE_API_KEY'),
        'base_uri' => env('WALKSCORE_BASE_URI', 'https://api.walkscore.com'),
    ],

];
