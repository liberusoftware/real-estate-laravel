@extends('layouts.app')

@section('content')
    <section class="re-hero" data-theme-region="hero">
        <div class="re-container re-hero-grid">
            <div>
                <p class="re-eyebrow">{{ __('theme-real-estate-default::messages.home.eyebrow') }}</p>
                <h1 class="re-display">{{ __('theme-real-estate-default::messages.home.title') }}</h1>
                <p class="re-lede">{{ __('theme-real-estate-default::messages.home.lede') }}</p>
                <div class="re-actions">
                    <a class="re-button re-button--primary" href="{{ $propertiesUrl ?? url('/properties') }}">{{ __('theme-real-estate-default::messages.home.browse') }}</a>
                    <a class="re-button re-button--secondary" href="{{ $howItWorksUrl ?? url('/how-it-works') }}">{{ __('theme-real-estate-default::messages.home.how_it_works') }}</a>
                </div>
            </div>
            <div class="re-hero-card" aria-label="{{ __('theme-real-estate-default::messages.home.hero_card') }}">
                <div class="re-hero-card__image" role="img" aria-label="{{ __('theme-real-estate-default::messages.home.hero_image') }}"></div>
                <div class="flex items-center justify-between gap-4 px-1 pt-4">
                    <div>
                        <p class="m-0 text-sm text-[var(--color-text-muted)]">{{ __('theme-real-estate-default::messages.home.hero_label') }}</p>
                        <strong class="text-lg">{{ $heroTitle ?? __('theme-real-estate-default::messages.property.home') }}</strong>
                    </div>
                    <span class="re-badge">{{ $heroStatus ?? __('theme-real-estate-default::messages.home.hero_status') }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="re-section" aria-labelledby="search-heading">
        <div class="re-container">
            <h2 id="search-heading" class="sr-only">{{ __('theme-real-estate-default::messages.home.search') }}</h2>
            <x-search-form />
        </div>
    </section>

    <section class="re-section pt-0" aria-labelledby="featured-heading" data-theme-region="modules.real-estate.properties.featured">
        <div class="re-container">
            <div class="re-section-heading">
                <div>
                    <h2 id="featured-heading">{{ __('theme-real-estate-default::messages.home.featured') }}</h2>
                    <p>{{ __('theme-real-estate-default::messages.home.featured_intro') }}</p>
                </div>
                <a class="font-semibold text-[var(--color-action-primary)]" href="{{ $propertiesUrl ?? url('/properties') }}">{{ __('theme-real-estate-default::messages.home.view_all') }}</a>
            </div>
            <x-property-grid :properties="$featuredProperties ?? []" />
        </div>
    </section>

    <section class="re-section bg-[var(--color-surface-muted)]" aria-labelledby="why-heading" data-theme-region="module-extension-points">
        <div class="re-container">
            <div class="re-section-heading">
                <div>
                    <h2 id="why-heading">{{ __('theme-real-estate-default::messages.home.why') }}</h2>
                    <p>{{ __('theme-real-estate-default::messages.home.why_intro') }}</p>
                </div>
            </div>
            <div class="re-feature-grid">
                <x-feature-card :title="__('theme-real-estate-default::messages.features.search_title')" :body="__('theme-real-estate-default::messages.features.search_body')" icon="⌕" />
                <x-feature-card :title="__('theme-real-estate-default::messages.features.people_title')" :body="__('theme-real-estate-default::messages.features.people_body')" icon="↗" />
                <x-feature-card :title="__('theme-real-estate-default::messages.features.progress_title')" :body="__('theme-real-estate-default::messages.features.progress_body')" icon="✓" />
            </div>
        </div>
    </section>
@endsection
