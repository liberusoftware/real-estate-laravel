<div class="mx-auto w-full max-w-6xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
    <form wire:submit="applyFilters" class="space-y-4" aria-label="Advanced property search">
        <div wire:loading class="text-sm text-gray-500" role="status">Loading properties…</div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div class="flex flex-col gap-1">
                <label for="advanced-property-search">Search</label>
                <input id="advanced-property-search" type="search" wire:model.live="search" autocomplete="off" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-postal-code">Postal code</label>
                <input id="advanced-postal-code" type="text" wire:model="postalCode" maxlength="20" autocomplete="postal-code" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-min-price">Minimum price</label>
                <input id="advanced-min-price" type="number" wire:model="minPrice" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-max-price">Maximum price</label>
                <input id="advanced-max-price" type="number" wire:model="maxPrice" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-min-year-built">Earliest build year</label>
                <input id="advanced-min-year-built" type="number" wire:model="minYearBuilt" min="{{ \Liberu\RealEstate\Properties\Models\Property::EARLIEST_YEAR_BUILT }}" max="{{ \Liberu\RealEstate\Properties\Models\Property::latestYearBuilt() }}" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-max-year-built">Latest build year</label>
                <input id="advanced-max-year-built" type="number" wire:model="maxYearBuilt" min="{{ \Liberu\RealEstate\Properties\Models\Property::EARLIEST_YEAR_BUILT }}" max="{{ \Liberu\RealEstate\Properties\Models\Property::latestYearBuilt() }}" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-min-energy-score">Minimum energy score</label>
                <input id="advanced-min-energy-score" type="number" wire:model="minEnergyScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-min-walkability-score">Minimum walkability score</label>
                <input id="advanced-min-walkability-score" type="number" wire:model="minWalkabilityScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-min-transit-score">Minimum transit score</label>
                <input id="advanced-min-transit-score" type="number" wire:model="minTransitScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-min-bike-score">Minimum bike score</label>
                <input id="advanced-min-bike-score" type="number" wire:model="minBikeScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-property-type">Property type</label>
                <select id="advanced-property-type" wire:model="propertyType" class="w-full rounded border border-gray-300 px-3 py-2">
                    <option value="">Any property type</option>
                    @foreach ($propertyTypes as $type => $label)
                        <option value="{{ $type }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-status">Status</label>
                <select id="advanced-status" wire:model="status" class="w-full rounded border border-gray-300 px-3 py-2">
                    <option value="">Any status</option>
                    @foreach (['draft' => 'Draft', 'available' => 'Available', 'under_offer' => 'Under offer', 'sold' => 'Sold', 'let' => 'Let', 'withdrawn' => 'Withdrawn'] as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-sort-by">Sort by</label>
                <select id="advanced-sort-by" wire:model.live="sortBy" class="w-full rounded border border-gray-300 px-3 py-2">
                    @foreach (['created_at' => 'Newest', 'updated_at' => 'Recently updated', 'price' => 'Price', 'year_built' => 'Year built', 'bedrooms' => 'Bedrooms', 'bathrooms' => 'Bathrooms', 'area_sqft' => 'Area', 'address' => 'Address'] as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-sort-direction">Sort direction</label>
                <select id="advanced-sort-direction" wire:model.live="sortDirection" class="w-full rounded border border-gray-300 px-3 py-2">
                    <option value="desc">Descending</option>
                    <option value="asc">Ascending</option>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-property-category">Category</label>
                <select id="advanced-property-category" wire:model="propertyCategoryId" class="w-full rounded border border-gray-300 px-3 py-2">
                    <option value="">Any category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->getKey() }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-property-template">Listing template</label>
                <select id="advanced-property-template" wire:model="propertyTemplateId" class="w-full rounded border border-gray-300 px-3 py-2">
                    <option value="">Any template</option>
                    @foreach ($templates as $template)
                        <option value="{{ $template->getKey() }}">{{ $template->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-country">Country</label>
                <input id="advanced-country" type="text" wire:model="country" maxlength="2" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-latitude">Latitude</label>
                <input id="advanced-latitude" type="number" wire:model="latitude" min="-90" max="90" step="any" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-longitude">Longitude</label>
                <input id="advanced-longitude" type="number" wire:model="longitude" min="-180" max="180" step="any" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="advanced-radius">Radius (km)</label>
                <input id="advanced-radius" type="number" wire:model="radius" min="0.1" max="500" step="any" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
        </div>

        <fieldset class="space-y-2">
            <legend>Amenities</legend>
            <div class="flex flex-wrap gap-x-4 gap-y-2">
                @foreach (['garden' => 'Garden', 'parking' => 'Parking', 'balcony' => 'Balcony', 'garage' => 'Garage', 'fireplace' => 'Fireplace'] as $amenity => $label)
                    <label for="advanced-amenity-{{ $amenity }}" class="flex items-center gap-2">
                        <input id="advanced-amenity-{{ $amenity }}" type="checkbox" value="{{ $amenity }}" wire:model="selectedAmenities">
                        {{ $label }}
                    </label>
                @endforeach
            </div>
        </fieldset>

        <div class="flex flex-wrap gap-x-4 gap-y-2">
            <label for="advanced-featured" class="flex items-center gap-2">
                <input id="advanced-featured" type="checkbox" wire:model="featuredOnly">
                Featured only
            </label>
            <label for="advanced-needs-syncing" class="flex items-center gap-2">
                <input id="advanced-needs-syncing" type="checkbox" wire:model="needsSyncingOnly">
                Needs syncing
            </label>
        </div>

        <button type="submit">Apply filters</button>
    </form>

    <section aria-label="Property map">
        <x-property-map :properties="$mapPoints" />
    </section>

    <section aria-label="Saved searches" class="space-y-2">
        <h2 class="text-lg font-semibold">Saved searches</h2>
        @if ($savedSearchMessage)<p role="status">{{ $savedSearchMessage }}</p>@endif
        <div class="flex flex-col gap-2 sm:flex-row sm:items-end">
            <div class="flex flex-1 flex-col gap-1">
                <label for="saved-search-name">Name this search</label>
                <input id="saved-search-name" type="text" wire:model="savedSearchName" maxlength="120" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <button type="button" wire:click="saveSearch">Save search</button>
        </div>
        <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($savedSearches as $savedSearch)
                <li wire:key="saved-search-{{ $savedSearch->getKey() }}" class="flex items-center justify-between gap-2 rounded border border-gray-200 px-3 py-2">
                    <span>{{ $savedSearch->name }}</span>
                    <span class="flex gap-2">
                        <button type="button" wire:click="loadSearch({{ $savedSearch->getKey() }})">Load</button>
                        <button type="button" wire:click="deleteSearch({{ $savedSearch->getKey() }})">Delete</button>
                    </span>
                </li>
            @empty
                <li>No saved searches yet.</li>
            @endforelse
        </ul>
    </section>

    <ul aria-live="polite" class="grid grid-cols-1 gap-2 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($properties as $property)
            <li wire:key="advanced-property-{{ $property->getKey() }}" class="rounded border border-gray-200 px-3 py-2">
                {{ $property->title ?: $property->address }}
            </li>
        @empty
            <li class="col-span-full">No properties match these filters.</li>
        @endforelse
    </ul>
</div>
