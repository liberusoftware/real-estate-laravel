<section aria-label="Property preview" class="mx-auto w-full max-w-2xl space-y-3 px-4 py-6 sm:px-6">
    @if ($property)
        <h2 class="text-xl font-semibold sm:text-2xl">{{ $property['title'] ?? 'Untitled property' }}</h2>
        <p class="text-gray-600">{{ $property['location'] ?? 'Location not supplied' }}</p>
        <dl class="grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-2">
            <div><dt class="text-sm text-gray-500">Price</dt><dd class="font-medium">{{ $property['price'] ?? 'Not supplied' }}</dd></div>
            <div class="sm:col-span-2"><dt class="text-sm text-gray-500">Description</dt><dd>{{ $property['description'] ?? 'Not supplied' }}</dd></div>
            @if (filled($property['custom_description'] ?? null))
                <div class="sm:col-span-2"><dt class="text-sm text-gray-500">Additional notes</dt><dd>{{ $property['custom_description'] }}</dd></div>
            @endif
        </dl>
    @else
        <p>No property selected for preview.</p>
    @endif
</section>
