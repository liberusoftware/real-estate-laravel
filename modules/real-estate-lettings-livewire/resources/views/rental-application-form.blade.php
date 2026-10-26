<form wire:submit="submit" class="mx-auto grid w-full max-w-2xl grid-cols-1 gap-4 px-4 py-6 sm:px-6 md:grid-cols-2">
    @if (session('status')) <div role="status" class="md:col-span-2">{{ session('status') }}</div> @endif
    <input wire:model="employment_status" placeholder="Employment status" required class="w-full rounded border border-gray-300 px-3 py-2">
    <input wire:model="annual_income" type="number" min="0" step="0.01" placeholder="Annual income" class="w-full rounded border border-gray-300 px-3 py-2">
    <input wire:model="desired_move_in_date" type="date" required class="w-full rounded border border-gray-300 px-3 py-2">
    <input wire:model="lease_end_date" type="date" class="w-full rounded border border-gray-300 px-3 py-2">
    <input wire:model="ethereum_address" placeholder="Ethereum address" class="w-full rounded border border-gray-300 px-3 py-2 md:col-span-2">
    <button type="submit" class="md:col-span-2">Submit application</button>
</form>
