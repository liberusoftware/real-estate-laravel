@extends('layouts.app')

@section('content')
    <article class="re-section" data-theme-extension="modules.real-estate.properties.show">
        <div class="re-container">
            <a class="mb-6 inline-flex font-semibold text-[var(--color-action-primary)]" href="{{ $backUrl ?? url('/properties') }}">← {{ __('theme-real-estate-default::messages.property.back') }}</a>
            <div class="grid gap-8 lg:grid-cols-[1.2fr_.8fr]">
                <div class="re-card__media rounded-[var(--radius-card)]">
                    @if ($imageUrl ?? null)
                        <img src="{{ $imageUrl }}" alt="{{ $imageAlt ?? data_get($property ?? [], 'title', '') }}" width="1200" height="750" loading="eager">
                    @else
                        <span class="grid h-full min-h-80 place-items-center p-6 text-center text-[var(--color-text-muted)]" role="img" aria-label="{{ __('theme-real-estate-default::messages.property.no_image') }}">{{ __('theme-real-estate-default::messages.property.no_image') }}</span>
                    @endif
                </div>
                <div>
                    <span class="re-badge">{{ $status ?? __('theme-real-estate-default::messages.property.available') }}</span>
                    <h1 class="mt-4 text-4xl font-bold tracking-tight">{{ data_get($property ?? [], 'title', __('theme-real-estate-default::messages.property.home')) }}</h1>
                    <p class="mt-3 text-lg text-[var(--color-text-muted)]">{{ data_get($property ?? [], 'location', '') }}</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        @if (data_get($property ?? [], 'price'))<span class="re-badge">{{ data_get($property, 'price') }}</span>@endif
                        @if (data_get($property ?? [], 'bedrooms') !== null)<span class="re-badge">{{ trans_choice('theme-real-estate-default::messages.property.bedrooms', (int) data_get($property, 'bedrooms'), ['count' => data_get($property, 'bedrooms')]) }}</span>@endif
                        @if (data_get($property ?? [], 'bathrooms') !== null)<span class="re-badge">{{ trans_choice('theme-real-estate-default::messages.property.bathrooms', (int) data_get($property, 'bathrooms'), ['count' => data_get($property, 'bathrooms')]) }}</span>@endif
                    </div>
                    @if ($description ?? null)<p class="mt-8 leading-8 text-[var(--color-text-muted)]">{{ $description }}</p>@endif
                    <div class="re-actions">
                        <a class="re-button re-button--primary" href="{{ $enquiryUrl ?? url('/contact') }}">{{ __('theme-real-estate-default::messages.property.enquire') }}</a>
                        <a class="re-button re-button--secondary" href="{{ $viewingUrl ?? url('/viewings') }}">{{ __('theme-real-estate-default::messages.property.book_viewing') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
