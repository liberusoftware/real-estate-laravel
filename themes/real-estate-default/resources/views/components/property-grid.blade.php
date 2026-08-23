@props(['properties' => []])

@if (count($properties))
    <div {{ $attributes->class(['re-grid']) }} data-theme-extension="real-estate.properties.grid">
        @foreach ($properties as $property)
            <x-property-card :property="$property" />
        @endforeach
    </div>
@else
    <div class="re-empty" role="status">{{ __('theme-real-estate-default::messages.property.empty') }}</div>
@endif
