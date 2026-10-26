<?php

return [
    'signup_roles' => ['buyer' => 'buyer', 'tourist' => 'buyer', 'tenant' => 'tenant', 'landlord' => 'landlord', 'seller' => 'seller'],
    'public_team_id' => env('PUBLIC_TEAM_ID'),
    'registration' => env('IDENTITY_REGISTRATION', 'open'),
    'require_verified_email' => true,
    'recent_auth_seconds' => 10800,
];
