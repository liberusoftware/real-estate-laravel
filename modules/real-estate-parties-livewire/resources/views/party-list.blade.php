<div class="mx-auto w-full max-w-4xl space-y-4 px-4 py-6 sm:px-6 lg:px-8">
    <div wire:loading class="text-sm text-gray-500" role="status">Loading parties…</div>
    <div class="flex flex-col gap-1">
        <label for="party-search">Search parties</label>
        <input id="party-search" type="search" wire:model.live="search" autocomplete="off" class="w-full max-w-sm rounded border border-gray-300 px-3 py-2">
    </div>
    <ul aria-live="polite" class="grid grid-cols-1 gap-2 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($parties as $party)
            <li wire:key="party-{{ $party->getKey() }}" class="rounded border border-gray-200 px-3 py-2">{{ $party->name }}</li>
        @empty
            <li class="col-span-full">No parties match this search.</li>
        @endforelse
    </ul>
</div>
