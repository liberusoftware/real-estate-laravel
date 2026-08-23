@props([
    'property',
    'href' => null,
    'image' => null,
    'alt' => null,
    'status' => null,
])

@php
    $title = data_get($property, 'title', __('theme-real-estate-default::messages.property.home'));
    $location = data_get($property, 'location', data_get($property, 'address', ''));
    $price = data_get($property, 'price', data_get($property, 'formatted_price', ''));
    $bedrooms = data_get($property, 'bedrooms');
    $bathrooms = data_get($property, 'bathrooms');
    $url = $href ?? data_get($property, 'url', '#');
    $imageUrl = $image ?? data_get($property, 'image_url');
@endphp

<article {{ $attributes->class(['re-card', 'group']) }} data-theme-extension="real-estate.properties.card">
    <a href="{{ $url }}" class="re-card__media" aria-label="{{ __('theme-real-estate-default::messages.property.view') }}: {{ $title }}">
        @if ($imageUrl)
            <img src="{{ $imageUrl }}" alt="{{ $alt ?? $title }}" width="960" height="600" loading="lazy">
        @else
            <span class="grid h-full min-h-48 place-items-center p-6 text-center text-sm text-[var(--color-text-muted)]" role="img" aria-label="{{ __('theme-real-estate-default::messages.property.no_image') }}">{{ __('theme-real-estate-default::messages.property.no_image') }}</span>
        @endif
    </a>
    <div class="re-card__body">
        @if ($status)
            <span class="re-badge">{{ $status }}</span>
        @endif
        <h3><a href="{{ $url }}">{{ $title }}</a></h3>
        @if ($location)
            <p>{{ $location }}</p>
        @endif
        <div class="re-card__meta">
            @if ($price)<span>{{ $price }}</span>@endif
            @if ($bedrooms !== null)<span>{{ trans_choice('theme-real-estate-default::messages.property.bedrooms', (int) $bedrooms, ['count' => $bedrooms]) }}</span>@endif
            @if ($bathrooms !== null)<span>{{ trans_choice('theme-real-estate-default::messages.property.bathrooms', (int) $bathrooms, ['count' => $bathrooms]) }}</span>@endif
        </div>
    </div>
</article>
