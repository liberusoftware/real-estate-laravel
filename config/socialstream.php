<?php

use JoelButcher\Socialstream\Features;

return [
    'guard' => 'web', // used if Fortify is not installed
    'middleware' => ['web'],
    'prompt' => 'Or Login Via',
    // Empty: none of these are wired to real OAuth apps (the *_CLIENT_ID/
    // SECRET .env entries are unfilled scaffolding), and GitHub/GitLab/
    // Bitbucket/Slack/LinkedIn/Twitter are developer-network providers with
    // no relevance to this market's real estate consumers anyway. Add back
    // only a provider that's actually configured.
    'providers' => [
        // \JoelButcher\Socialstream\Providers::google(),
    ],
    'features' => [
        // Features::generateMissingEmails(),
        // Features::createAccountOnFirstLogin(),
        // Features::globalLogin(),
        // Features::authExistingUnlinkedUsers(),
        Features::rememberSession(),
        Features::providerAvatars(),
        Features::refreshOAuthTokens(),
    ],
    'home' => '/dashboard',
    'redirects' => [
        'login' => '/dashboard',
        'register' => '/dashboard',
        'login-failed' => '/login',
        'registration-failed' => '/register',
        'provider-linked' => '/user/profile',
        'provider-link-failed' => '/user/profile',
    ],
];
