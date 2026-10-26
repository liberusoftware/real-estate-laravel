<div class="mx-auto w-full max-w-xl space-y-4 px-4 py-6 sm:px-6">
    <h2 class="text-lg font-semibold">Review {{ $neighborhood->name }}</h2>

    @if ($message)
        <p role="status">{{ $message }}</p>
    @endif

    <form wire:submit="submitReview" class="space-y-4">
        <fieldset>
            <legend>Rating</legend>
            <div class="flex gap-2" role="radiogroup" aria-label="Rating">
                @for ($value = 1; $value <= 5; $value++)
                    <button type="button" wire:click="$set('rating', {{ $value }})" aria-label="{{ $value }} out of 5" aria-pressed="{{ $rating === $value ? 'true' : 'false' }}">★</button>
                @endfor
            </div>
        </fieldset>

        <div>
            <label for="neighborhood-review-title">Title</label>
            <input id="neighborhood-review-title" wire:model="title" required minlength="3" maxlength="100" class="w-full rounded border border-gray-300 px-3 py-2">
            @error('title') <p role="alert">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="neighborhood-review-comment">Comment</label>
            <textarea id="neighborhood-review-comment" wire:model="comment" required minlength="10" maxlength="1000" class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
            @error('comment') <p role="alert">{{ $message }}</p> @enderror
            @error('review') <p role="alert">{{ $message }}</p> @enderror
        </div>

        <button type="submit">Submit review</button>
    </form>
</div>
