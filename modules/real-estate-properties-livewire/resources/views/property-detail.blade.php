<div class="mx-auto w-full max-w-4xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
    <article aria-label="Property detail" class="space-y-6">
        <header class="space-y-1">
            <h1 class="text-2xl font-bold sm:text-3xl">{{ $property->title ?: $property->address }}</h1>
            <p class="text-gray-600">{{ $property->address }}</p>
            @if ($property->price !== null)
                <p class="text-xl font-semibold">{{ $property->currency ?: config('app.currency', 'USD') }} {{ number_format((float) $property->price, 2) }}</p>
            @endif
        </header>

        @if ($gallery !== [])
            <section aria-label="Property gallery" class="space-y-2">
                <h2 class="text-lg font-semibold">Gallery</h2>
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-4">
                    @foreach ($gallery as $item)
                        <figure wire:key="gallery-item-{{ $loop->index }}" class="aspect-square overflow-hidden rounded">
                            <img src="{{ $item->url }}" alt="{{ $item->alt() }}" loading="lazy" class="h-full w-full {{ $item->isPlan() ? 'object-contain' : 'object-cover' }}">
                            <figcaption class="text-xs text-gray-500">{{ $item->caption ?? ucfirst($item->kind) }}@if ($item->staged) — Virtually staged @endif</figcaption>
                        </figure>
                    @endforeach
                </div>
            </section>
        @endif

        <section aria-label="Property disclosure" class="space-y-2">
            <h2 class="text-lg font-semibold">Property facts</h2>
            <dl class="grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-2">
                @foreach ($facts as $fact)
                    <div wire:key="property-fact-{{ $loop->index }}" class="border-b border-gray-100 pb-2">
                        <dt class="text-sm text-gray-500">{{ $fact['label'] }}</dt>
                        <dd class="font-medium">{{ $fact['value'] ?? 'Not supplied' }}</dd>
                        <small class="text-gray-400">{{ $fact['source'] }}</small>
                    </div>
                @endforeach
            </dl>
        </section>

        @if ($property->floor_plan_image)
            <figure>
                <img src="{{ $property->floor_plan_image }}" alt="Floor plan for {{ $property->title ?: $property->address }}" loading="lazy" class="h-auto w-full">
            </figure>
        @endif

        @if ($property->hasVirtualTour())
            <button type="button" wire:click="toggleVirtualTour">{{ $showVirtualTour ? 'Hide virtual tour' : 'Show virtual tour' }}</button>
            @if ($showVirtualTour)
                <div class="aspect-video w-full">
                    {!! $property->getVirtualTourEmbed() !!}
                </div>
            @endif
        @endif

        @if ($property->model3dUrl())
            <section aria-label="3D property model" class="space-y-2">
                <button type="button" wire:click="toggle3dModel">
                    {{ $show3dModel ? 'Hide 3D model' : 'Show 3D model' }}
                </button>
                @if ($show3dModel)
                    <model-viewer
                        src="{{ $property->model3dUrl() }}"
                        alt="3D model of {{ $property->title ?: $property->address }}"
                        loading="lazy"
                        camera-controls
                        reveal="manual"
                        class="aspect-video w-full"
                    ></model-viewer>
                @endif
            </section>
        @endif

        @if ($videoUrl)
            <section aria-label="Property video" class="space-y-2">
                <h2 class="text-lg font-semibold">Property video</h2>
                <video class="aspect-video w-full" controls preload="none" aria-label="Video tour of {{ $property->title ?: $property->address }}">
                    <source src="{{ $videoUrl }}">
                    Your browser cannot play this video.
                </video>
            </section>
        @endif

        <div class="flex flex-col gap-2 sm:flex-row sm:flex-wrap">
            <button type="button" wire:click="toggleFavorite">{{ $isFavorited ? 'Unfavorite' : 'Favorite' }}</button>
            <button type="button" wire:click="requestViewing">Book a viewing</button>
            @if ($property->live_tour_available)
                <button type="button" wire:click="openScheduleLiveTourModal">Book a live virtual tour</button>
            @endif
        </div>

        @if ($showScheduleLiveTourModal)
            <section aria-label="Schedule live virtual tour" class="space-y-3 rounded border border-gray-200 p-4">
                <h2 class="text-lg font-semibold">Schedule a live virtual tour</h2>
                <form wire:submit="scheduleLiveTour" class="space-y-3">
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                        <div class="flex flex-col gap-1">
                            <label for="tour-date">Date</label>
                            <input id="tour-date" type="date" wire:model="tourDate" required class="w-full rounded border border-gray-300 px-3 py-2">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="tour-time">Time</label>
                            <input id="tour-time" type="time" wire:model="tourTime" required class="w-full rounded border border-gray-300 px-3 py-2">
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="tour-notes">Notes</label>
                        <textarea id="tour-notes" wire:model="tourNotes" maxlength="500" class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
                    </div>
                    @error('tourDate') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
                    @error('tourTime') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
                    <div class="flex flex-col gap-2 sm:flex-row">
                        <button type="submit">Schedule tour</button>
                        <button type="button" wire:click="closeScheduleLiveTourModal">Cancel</button>
                    </div>
                </form>
            </section>
        @endif
    </article>
</div>
