<?php

return [
    'base' => env('APP_CURRENCY', 'USD'),
    'exchange_rates_enabled' => env('EXCHANGE_RATES_ENABLED', false),
    'display' => env('DISPLAY_CURRENCY'),
    'stale_after_seconds' => 86400,
    'currencies' => [
        'USD' => ['minor_units' => 2, 'symbol' => '$'],
        'EUR' => ['minor_units' => 2, 'symbol' => '€'],
        'GBP' => ['minor_units' => 2, 'symbol' => '£'],
        'JPY' => ['minor_units' => 0, 'symbol' => '¥'],
        'KWD' => ['minor_units' => 3, 'symbol' => 'د.ك'],
        'TJS' => ['minor_units' => 2, 'symbol' => 'TJS'],
    ],

    // The free, no-key endpoint of exchangerate-api.com. `{base}` is
    // replaced with the ISO code. Refreshed at most once per
    // stale_after_seconds — this provider itself updates daily anyway.
    'exchange_rate_api_url' => env('EXCHANGE_RATE_API_URL', 'https://open.er-api.com/v6/latest/{base}'),

    // Tried only when the URL above fails or returns no rates. Same response
    // shape; keyless ECB reference rates (~30 currencies) from AllRatesToday.
    // Rates from it should be credited "Exchange rates by AllRatesToday"
    // (https://allratestoday.com) where shown. Set to an empty string to disable.
    'exchange_rate_api_fallback_url' => env('EXCHANGE_RATE_API_FALLBACK_URL', 'https://allratestoday.com/api/open/latest/{base}'),
];
