<section aria-label="Rental yield calculator" class="mx-auto w-full max-w-2xl space-y-4 px-4 py-6 sm:px-6">
    <div>
        <h2 class="text-lg font-semibold">Rental yield estimate</h2>
        <p class="text-sm text-gray-600">Estimate gross and net rental yield. Estimate only; vacancies, taxes, financing, maintenance, and local costs are not fully modelled.</p>
    </div>
    <div class="grid gap-4 md:grid-cols-3">
        <label class="flex flex-col gap-1">Property value <input type="number" min="0.01" step="0.01" wire:model="propertyValue" class="w-full rounded border border-gray-300 px-3 py-2"></label>
        <label class="flex flex-col gap-1">Annual rental income <input type="number" min="0" step="0.01" wire:model="annualRentalIncome" class="w-full rounded border border-gray-300 px-3 py-2"></label>
        <label class="flex flex-col gap-1">Annual expenses <input type="number" min="0" step="0.01" wire:model="annualExpenses" class="w-full rounded border border-gray-300 px-3 py-2"></label>
    </div>
    <button type="button" wire:click="calculateRentalYield">Calculate rental yield</button>
    @if ($error)<p role="alert" class="text-red-600">{{ $error }}</p>@endif
    @if ($result)
        <dl>
            <dt>Gross yield</dt><dd>{{ number_format((float) $result['gross_yield'], 2) }}%</dd>
            <dt>Net yield</dt><dd>{{ number_format((float) $result['net_yield'], 2) }}%</dd>
            <dt>Expense ratio</dt><dd>{{ number_format((float) $result['expense_ratio'], 2) }}%</dd>
        </dl>
        <button type="button" wire:click="resetCalculation">Reset</button>
    @endif
</section>
