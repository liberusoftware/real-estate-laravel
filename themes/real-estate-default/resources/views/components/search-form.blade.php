@props(['action' => null, 'method' => 'GET'])

<form {{ $attributes->class(['re-form']) }} action="{{ $action ?? url('/properties') }}" method="{{ $method }}" role="search" data-theme-extension="real-estate.properties.search">
    <div class="re-field">
        <label for="property-location">{{ __('theme-real-estate-default::messages.home.search_location') }}</label>
        <input id="property-location" name="location" type="search" value="{{ request('location') }}" autocomplete="address-level2">
    </div>
    <div class="re-field">
        <label for="property-type">{{ __('theme-real-estate-default::messages.home.search_type') }}</label>
        <select id="property-type" name="type">
            <option value="">{{ __('theme-real-estate-default::messages.home.search_any') }}</option>
            <option value="house">{{ __('theme-real-estate-default::messages.home.search_house') }}</option>
            <option value="apartment">{{ __('theme-real-estate-default::messages.home.search_apartment') }}</option>
        </select>
    </div>
    <div class="re-field">
        <label for="property-budget">{{ __('theme-real-estate-default::messages.home.search_budget') }}</label>
        <input id="property-budget" name="max_price" type="number" min="0" inputmode="decimal" value="{{ request('max_price') }}">
    </div>
    <div class="flex items-end">
        <button class="re-button re-button--primary w-full" type="submit">{{ __('theme-real-estate-default::messages.home.search_submit') }}</button>
    </div>
</form>
