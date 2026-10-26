<div class="mx-auto w-full max-w-5xl space-y-4 px-4 py-6 sm:px-6 lg:px-8">
    <section aria-label="Property recommendations" class="space-y-4">
        <h2 class="text-lg font-semibold">Recommended properties</h2>
        <div wire:loading role="status" class="text-sm text-gray-500">Loading recommendations…</div>
        @if ($error)
            <p role="alert" class="text-red-600">{{ $error }}</p>
        @elseif ($recommendations === [])
            <p>Nothing to recommend yet. Save a home or run a search and this fills up.</p>
        @else
            <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($recommendations as $recommendation)
                    <li wire:key="recommendation-{{ $recommendation['id'] ?? $loop->index }}" class="flex flex-col gap-1 rounded-lg border border-gray-200 p-4">
                        <span class="font-medium">{{ $recommendation['title'] ?? $recommendation['address'] ?? 'Property' }}</span>
                        <span class="text-sm text-gray-600">Match score: {{ $recommendation['recommendation_score'] }}</span>
                    </li>
                @endforeach
            </ul>
            @if (count($recommendations) >= $limit && count($candidates) > count($recommendations))
                <button type="button" wire:click="loadMore">Show more</button>
            @endif
        @endif
    </section>
</div>
