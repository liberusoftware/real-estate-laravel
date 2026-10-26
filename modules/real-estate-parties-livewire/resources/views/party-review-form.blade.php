<form wire:submit="submitReview" class="mx-auto w-full max-w-xl space-y-4 px-4 py-6 sm:px-6">
    <div aria-label="{{ $rating }} out of 5" role="radiogroup" class="flex flex-col gap-1">
        <label for="party-review-rating">Rating</label>
        <input id="party-review-rating" type="number" min="1" max="5" wire:model="rating" class="w-full rounded border border-gray-300 px-3 py-2 sm:w-32">
    </div>
    <div class="flex flex-col gap-1">
        <label for="party-review-comment">Comment</label>
        <textarea id="party-review-comment" wire:model="comment" class="w-full rounded border border-gray-300 px-3 py-2"></textarea>
    </div>
    @error('rating') <span class="text-red-600">{{ $message }}</span> @enderror
    @error('comment') <span class="text-red-600">{{ $message }}</span> @enderror
    <button type="submit">Submit review</button>
    @if ($message) <p role="status">{{ $message }}</p> @endif
</form>
