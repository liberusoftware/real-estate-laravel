<div class="mx-auto w-full max-w-2xl space-y-4 px-4 py-6 sm:px-6">
    <section aria-label="Mortgage calculator" class="space-y-4">
        <h2 class="text-lg font-semibold">Mortgage estimate</h2>
        <p class="text-sm text-gray-600">This is an estimate only; actual lender offers, fees, taxes, and rates vary.</p>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="flex flex-col gap-1">
                <label for="mortgage-property-price">Property price</label>
                <input id="mortgage-property-price" type="number" min="0.01" wire:model="propertyPrice" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="mortgage-loan-amount">Loan amount</label>
                <input id="mortgage-loan-amount" type="number" min="0.01" wire:model="loanAmount" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="mortgage-interest-rate">Annual interest rate</label>
                <input id="mortgage-interest-rate" type="number" min="0" max="100" step="0.01" wire:model="interestRate" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
            <div class="flex flex-col gap-1">
                <label for="mortgage-term">Loan term in years</label>
                <input id="mortgage-term" type="number" min="1" max="50" wire:model="loanTermYears" class="w-full rounded border border-gray-300 px-3 py-2">
            </div>
        </div>

        <button type="button" wire:click="calculateMortgage">Calculate estimate</button>

        @if ($error)
            <p role="alert" class="text-red-600">{{ $error }}</p>
        @endif

        @if ($result)
            <dl class="grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-3">
                <div><dt class="text-sm text-gray-500">Monthly payment</dt><dd class="font-medium">{{ number_format((float) $result['monthly_payment'], 2) }}</dd></div>
                <div><dt class="text-sm text-gray-500">Total interest</dt><dd class="font-medium">{{ number_format((float) $result['total_interest'], 2) }}</dd></div>
                <div><dt class="text-sm text-gray-500">Loan to value</dt><dd class="font-medium">{{ number_format((float) $result['loan_to_value'], 2) }}%</dd></div>
            </dl>
            <button type="button" wire:click="resetCalculation">Reset</button>
        @endif
    </section>
</div>
