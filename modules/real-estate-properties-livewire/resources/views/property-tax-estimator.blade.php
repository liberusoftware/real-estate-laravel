<div class="mx-auto w-full max-w-2xl space-y-4 px-4 py-6 sm:px-6">
    <section aria-label="Property tax estimator" class="space-y-4">
        <h2 class="text-lg font-semibold">Property tax estimate</h2>
        <p class="text-sm text-gray-600">This calculator provides an estimate only; confirm current rates with a qualified adviser.</p>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="flex flex-col gap-1">
                <label for="tax-buyer-type">Buyer type</label>
                <select id="tax-buyer-type" wire:model="buyerType" class="w-full rounded border border-gray-300 px-3 py-2">
                    <option value="first_time_buyer">First-time buyer</option>
                    <option value="home_mover">Home mover</option>
                    <option value="additional_property">Additional property</option>
                </select>
            </div>

            <div class="flex flex-col gap-1">
                <label for="tax-country">Country</label>
                <input id="tax-country" type="text" wire:model="country" maxlength="80" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
        </div>

        <button type="button" wire:click="calculateTax">Calculate estimate</button>

        @if ($estimate)
            <dl class="grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-3">
                <div><dt class="text-sm text-gray-500">Estimated tax</dt><dd class="font-medium">{{ number_format((float) ($estimate['total_tax'] ?? 0), 2) }}</dd></div>
                <div><dt class="text-sm text-gray-500">Additional costs</dt><dd class="font-medium">{{ number_format((float) ($estimate['total_additional_costs'] ?? 0), 2) }}</dd></div>
                <div><dt class="text-sm text-gray-500">Total estimated cost</dt><dd class="font-medium">{{ number_format((float) ($estimate['total_cost'] ?? $property->price), 2) }}</dd></div>
            </dl>
            <button type="button" wire:click="resetCalculation">Reset</button>
        @endif
    </section>
</div>
