<section aria-label="Saved properties" class="mx-auto w-full max-w-4xl space-y-4 px-4 py-6 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold sm:text-3xl">Saved properties</h2>

    <div class="flex flex-col gap-4 sm:flex-row sm:items-end">
        <div class="flex flex-1 flex-col gap-1">
            <label for="wishlist-search">Search saved properties</label>
            <input id="wishlist-search" type="search" wire:model.live="search" class="w-full rounded border border-gray-300 px-3 py-2">
        </div>
        <div class="flex flex-col gap-1">
            <label for="wishlist-sort">Sort by</label>
            <select id="wishlist-sort" wire:model.live="sortBy" class="w-full rounded border border-gray-300 px-3 py-2 sm:w-auto">
                <option value="created_at">Recently saved</option>
                <option value="title">Title</option>
                <option value="price">Price</option>
                <option value="address">Address</option>
            </select>
        </div>
    </div>

    @if ($removed)<p role="status">{{ $removed }}</p>@endif
    <p aria-live="polite" class="text-sm text-gray-600">{{ $totalFavorites }} saved properties.</p>

    <ul aria-live="polite" class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($properties as $property)
            <li wire:key="saved-property-{{ $property->getKey() }}" class="flex flex-col gap-2 rounded-lg border border-gray-200 p-4">
                <span class="font-medium">{{ $property->title ?: $property->address }}</span>
                @if ($property->price !== null)<span>{{ $property->price }}</span>@endif
                <button type="button" wire:click="removeFavorite({{ $property->getKey() }})" class="mt-auto self-start">Remove</button>
            </li>
        @empty
            <li class="col-span-full">No saved properties yet. Search properties to add one to your shortlist.</li>
        @endforelse
    </ul>

    {{ $properties->links() }}
</section>
