<div class="mx-auto w-full max-w-xl space-y-4 px-4 py-6 sm:px-6">
    <form wire:submit="book" aria-label="Book a viewing" class="space-y-4">
        <div wire:loading class="text-sm text-gray-500" role="status">Loading availability…</div>
        @if ($booked)
            <p role="status">Viewing requested.</p>
        @endif
        @if ($error)
            <p role="alert" class="text-red-600">{{ $error }}</p>
        @endif

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="flex flex-col gap-1">
                <label for="viewing-booking-date">Date</label>
                <input id="viewing-booking-date" type="date" wire:model.live="date" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="viewing-booking-subject">Subject</label>
                <input id="viewing-booking-subject" type="text" wire:model="subject" maxlength="255" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
        </div>

        <fieldset class="space-y-2">
            <legend>Available times</legend>
            <div class="flex flex-wrap gap-2">
                @forelse ($availableSlots as $slot)
                    <label wire:key="viewing-slot-{{ $slot }}" class="flex items-center gap-2 rounded border border-gray-300 px-3 py-2">
                        <input type="radio" wire:model="selectedSlot" value="{{ $slot }}">
                        {{ \Carbon\CarbonImmutable::parse($slot)->format('H:i') }}
                    </label>
                @empty
                    <p>No viewing slots are available for this date.</p>
                @endforelse
            </div>
        </fieldset>

        <button type="submit">Request viewing</button>
    </form>
</div>
