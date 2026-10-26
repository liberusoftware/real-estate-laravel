<div class="mx-auto w-full max-w-6xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
    <div wire:loading class="text-sm text-gray-500" role="status">Loading properties…</div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <div class="flex flex-col gap-1">
            <label for="property-search">Search properties</label>
            <input id="property-search" type="search" wire:model.live="search" autocomplete="off" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-postal-code">Postal code</label>
            <input id="property-postal-code" type="text" wire:model.live="postalCode" maxlength="20" autocomplete="postal-code" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex items-center gap-2 self-end">
            <input id="needs-syncing-only" type="checkbox" wire:model.live="needsSyncingOnly">
            <label for="needs-syncing-only">Needs syncing</label>
        </div>

        @if ($error)
            <p role="alert" class="col-span-full text-red-600">{{ $error }}</p>
        @endif

        <p aria-live="polite" class="col-span-full text-sm text-gray-600">{{ method_exists($properties, 'total') ? $properties->total() : 0 }} properties found.</p>

        @if ($this->appliedFilters() !== [])
            <section aria-label="Applied property filters" class="col-span-full space-y-2">
                <ul class="flex flex-wrap gap-2">
                    @foreach ($this->appliedFilters() as $filter => $label)
                        <li wire:key="applied-filter-{{ $filter }}" class="flex items-center gap-1 rounded-full border border-gray-300 px-3 py-1 text-sm">
                            {{ $label }}
                            <button type="button" wire:click="clearFilter('{{ $filter }}')">Clear</button>
                        </li>
                    @endforeach
                </ul>
                <button type="button" wire:click="clearFilters">Clear all filters</button>
            </section>
        @endif

        <div class="flex flex-col gap-1">
            <label for="property-type">Property type</label>
            <select id="property-type" wire:model.live="propertyType" class="w-full rounded border border-gray-300 px-3 py-2">
                <option value="">Any property type</option>
                @foreach ($propertyTypes as $type => $label)
                    <option value="{{ $type }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-status">Status</label>
            <select id="property-status" wire:model.live="status" class="w-full rounded border border-gray-300 px-3 py-2">
                <option value="">Any status</option>
                @foreach (['draft' => 'Draft', 'available' => 'Available', 'under_offer' => 'Under offer', 'sold' => 'Sold', 'let' => 'Let', 'withdrawn' => 'Withdrawn'] as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-sort-by">Sort by</label>
            <select id="property-sort-by" wire:model.live="sortBy" class="w-full rounded border border-gray-300 px-3 py-2">
                @foreach (['created_at' => 'Newest', 'updated_at' => 'Recently updated', 'price' => 'Price', 'year_built' => 'Year built', 'bedrooms' => 'Bedrooms', 'bathrooms' => 'Bathrooms', 'area_sqft' => 'Area', 'address' => 'Address'] as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-sort-direction">Direction</label>
            <select id="property-sort-direction" wire:model.live="sortDirection" class="w-full rounded border border-gray-300 px-3 py-2">
                <option value="desc">Descending</option>
                <option value="asc">Ascending</option>
            </select>
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-price">Minimum price</label>
            <input id="min-price" type="number" wire:model.live="minPrice" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="max-price">Maximum price</label>
            <input id="max-price" type="number" wire:model.live="maxPrice" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-bedrooms">Minimum bedrooms</label>
            <input id="min-bedrooms" type="number" wire:model.live="minBedrooms" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="max-bedrooms">Maximum bedrooms</label>
            <input id="max-bedrooms" type="number" wire:model.live="maxBedrooms" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-bathrooms">Minimum bathrooms</label>
            <input id="min-bathrooms" type="number" wire:model.live="minBathrooms" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="max-bathrooms">Maximum bathrooms</label>
            <input id="max-bathrooms" type="number" wire:model.live="maxBathrooms" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-area">Minimum area</label>
            <input id="min-area" type="number" wire:model.live="minArea" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="max-area">Maximum area</label>
            <input id="max-area" type="number" wire:model.live="maxArea" min="0" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-year-built">Minimum year built</label>
            <input id="min-year-built" type="number" wire:model.live="minYearBuilt" min="1066" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="max-year-built">Maximum year built</label>
            <input id="max-year-built" type="number" wire:model.live="maxYearBuilt" min="1066" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="property-country">Country</label>
            <input id="property-country" type="text" wire:model.live="country" maxlength="2" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="energy-rating">Energy rating</label>
            <input id="energy-rating" type="text" wire:model.live="energyRating" maxlength="10" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-energy-score">Minimum energy score</label>
            <input id="min-energy-score" type="number" wire:model.live="minEnergyScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-walkability-score">Minimum walkability score</label>
            <input id="min-walkability-score" type="number" wire:model.live="minWalkabilityScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-transit-score">Minimum transit score</label>
            <input id="min-transit-score" type="number" wire:model.live="minTransitScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="min-bike-score">Minimum bike score</label>
            <input id="min-bike-score" type="number" wire:model.live="minBikeScore" min="0" max="100" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex items-center gap-2 self-end">
            <input id="featured-only" type="checkbox" wire:model.live="featuredOnly">
            <label for="featured-only">Featured only</label>
        </div>
    </div>

    <ul aria-live="polite" class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($properties as $property)
            <li wire:key="property-{{ $property->getKey() }}" class="flex flex-col gap-2 rounded-lg border border-gray-200 p-4">
                <p class="font-medium">{{ $property->address }} ({{ $property->status->value }})</p>
                @if ($property->hasShortLease())
                    <span>{{ $property->lease_years_remaining }}-year lease</span>
                @endif
                <div class="flex flex-wrap items-center gap-2 text-sm">
                    @if ($property->isHmo())
                        <span aria-label="House in multiple occupation">HMO</span>
                    @endif
                    @if ($property->hasActiveInsurance())
                        <span aria-label="Active insurance">Insured</span>
                    @endif
                    @if ($property->hasVirtualTour())
                        <span aria-label="Virtual tour available">Virtual tour</span>
                    @endif
                    @if ($property->floor_plan_image)
                        <a href="{{ $property->floor_plan_image }}" rel="noopener" target="_blank">Floor plan</a>
                    @endif
                </div>
                <div class="mt-auto flex flex-wrap gap-2">
                    <button type="button" wire:click="toggleFavorite({{ $property->getKey() }})">
                        {{ $property->favorites->contains(fn ($favorite) => (string) $favorite->user_id === (string) auth()->id()) ? 'Unfavorite' : 'Favorite' }}
                    </button>
                    <button type="button" wire:click="showSimilar({{ $property->getKey() }})">Similar</button>
                    @if ($property->status->value === 'draft')
                        <button type="button" wire:click="publish({{ $property->getKey() }})">Publish</button>
                    @elseif ($property->status->value === 'available')
                        <button type="button" wire:click="markUnderOffer({{ $property->getKey() }})">Mark under offer</button>
                        <button type="button" wire:click="markSold({{ $property->getKey() }})">Mark sold</button>
                    @elseif ($property->status->value === 'under_offer')
                        <button type="button" wire:click="markSold({{ $property->getKey() }})">Mark sold</button>
                    @endif
                    @if (in_array($property->status->value, ['draft', 'available', 'under_offer'], true))
                        <button type="button" wire:click="withdraw({{ $property->getKey() }})">Withdraw</button>
                    @endif
                </div>
            </li>
        @empty
            <li class="col-span-full">No properties match this search.</li>
        @endforelse
    </ul>

    @if ($similarProperties !== [])
        <section aria-label="Similar properties" class="space-y-2">
            <h2 class="text-lg font-semibold">Similar properties</h2>
            <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($similarProperties as $similar)
                    <li wire:key="similar-property-{{ $similar['id'] }}" class="rounded border border-gray-200 p-3">{{ $similar['title'] }}</li>
                @endforeach
            </ul>
        </section>
    @endif
</div>
