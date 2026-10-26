<div class="mx-auto w-full max-w-2xl space-y-4 px-4 py-6 sm:px-6">
    <h2 class="text-lg font-semibold">Price alerts for {{ $property->title ?: $property->address }}</h2>

    @if (session('message'))
        <p role="status">{{ session('message') }}</p>
    @endif

    <form wire:submit="createAlert" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div>
            <label for="price-alert-percentage">Change threshold (%)</label>
            <input id="price-alert-percentage" type="number" step="0.1" min="0.1" max="100" wire:model="alertPercentage" required class="w-full rounded border border-gray-300 px-3 py-2">
            @error('alertPercentage') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
        </div>
        <div>
            <label for="price-alert-frequency">Frequency</label>
            <select id="price-alert-frequency" wire:model="alertFrequency" required class="w-full rounded border border-gray-300 px-3 py-2">
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
            </select>
            @error('alertFrequency') <p role="alert" class="text-red-600">{{ $message }}</p> @enderror
        </div>
        <button type="submit" class="sm:col-span-2 sm:justify-self-start">Create price alert</button>
    </form>

    <ul aria-label="Price alerts" class="space-y-2">
        @forelse ($priceAlerts as $alert)
            <li wire:key="price-alert-{{ $alert['id'] }}" class="flex flex-col gap-2 rounded border border-gray-200 px-3 py-2 sm:flex-row sm:items-center sm:justify-between">
                <span>{{ $alert['alert_percentage'] }}% · {{ ucfirst($alert['alert_frequency']) }}</span>
                <span class="flex gap-2">
                    <button type="button" wire:click="toggleAlert({{ $alert['id'] }})">{{ $alert['is_active'] ? 'Pause' : 'Resume' }}</button>
                    <button type="button" wire:click="deleteAlert({{ $alert['id'] }})">Delete</button>
                </span>
            </li>
        @empty
            <li>No price alerts yet.</li>
        @endforelse
    </ul>
</div>
