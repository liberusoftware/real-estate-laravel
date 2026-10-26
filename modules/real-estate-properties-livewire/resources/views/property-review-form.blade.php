<section aria-label="Review {{ $property->title ?: $property->address }}" class="mx-auto w-full max-w-xl space-y-4 px-4 py-6 sm:px-6">
    <h2 class="text-lg font-semibold">Share your experience</h2>

    @if ($message)
        <p role="status">{{ $message }}</p>
    @endif

    <form wire:submit="submitReview" class="space-y-4">
        <fieldset>
            <legend>Rating</legend>
            <div class="flex gap-2">
                @for ($value = 1; $value <= 5; $value++)
                    <button
                        type="button"
                        wire:click="$set('rating', {{ $value }})"
                        aria-label="{{ $value }} out of 5"
                        aria-pressed="{{ $rating === $value ? 'true' : 'false' }}"
                    >★</button>
                @endfor
            </div>
        </fieldset>

        @error('rating') <p class="text-red-600">{{ $message }}</p> @enderror

        <div class="flex flex-col gap-1">
            <label for="property-review-title">Title</label>
            <input id="property-review-title" type="text" wire:model="title" class="w-full rounded border border-gray-300 px-3 py-2">
            @error('title') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="property-review-comment">Comment</label>
            <textarea id="property-review-comment" wire:model="comment" class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
            @error('comment') <p class="text-red-600">{{ $message }}</p> @enderror
            @error('review') <p class="text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit">Submit review</button>
    </form>
</section>
