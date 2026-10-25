<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ in_array(app()->getLocale(), ['ar', 'fa', 'he', 'ur'], true) ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? __('theme-real-estate-default::messages.home.lede') }}">
    <title>{{ $title ?? __('theme-real-estate-default::messages.brand') }}</title>
    @themeCss
    @themeJs
</head>
<body class="re-shell">
    <a class="re-skip-link" href="#main-content">{{ __('theme-real-estate-default::messages.navigation.skip') }}</a>
    <header class="re-header" data-theme-region="navigation">
        <div class="re-container re-nav">
            <a class="re-brand" href="{{ url('/') }}" aria-label="{{ __('theme-real-estate-default::messages.brand') }}">
                <span class="re-brand-mark" aria-hidden="true">⌂</span>
                <span>{{ __('theme-real-estate-default::messages.brand') }}</span>
            </a>
            <button class="re-menu-button" type="button" data-real-estate-menu-button aria-expanded="false" aria-controls="real-estate-menu">
                <span class="sr-only">{{ __('theme-real-estate-default::messages.navigation.menu') }}</span>
                <span aria-hidden="true">☰</span>
            </button>
            <nav id="real-estate-menu" class="re-nav-links" data-real-estate-menu data-open="false" aria-label="{{ __('theme-real-estate-default::messages.navigation.primary') }}">
                <a href="{{ $propertiesUrl ?? url('/properties') }}">{{ __('theme-real-estate-default::messages.navigation.properties') }}</a>
                <a href="{{ $howItWorksUrl ?? url('/how-it-works') }}">{{ __('theme-real-estate-default::messages.navigation.how_it_works') }}</a>
                @auth
                    <a class="re-button re-button--secondary" href="{{ $accountUrl ?? url('/dashboard') }}">{{ __('theme-real-estate-default::messages.navigation.account') }}</a>
                @else
                    <a class="re-button re-button--primary" href="{{ $signInUrl ?? url('/login') }}">{{ __('theme-real-estate-default::messages.navigation.sign_in') }}</a>
                @endauth
            </nav>
        </div>
    </header>

    @isset($header)
        <div class="re-container re-section" data-theme-region="header">{{ $header }}</div>
    @endisset

    <main id="main-content" tabindex="-1">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <footer class="re-footer">
        <div class="re-container">
            <p>{{ __('theme-real-estate-default::messages.footer') }}</p>
        </div>
    </footer>
</body>
</html>
