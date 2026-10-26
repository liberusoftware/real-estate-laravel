<div class="mx-auto w-full max-w-2xl space-y-4 px-4 py-6 sm:px-6">
    <section aria-label="Property valuation estimator" class="space-y-4">
        <h2 class="text-lg font-semibold">Property valuation estimate</h2>
        <p class="text-sm text-gray-600">This explainable estimate is for guidance only; it is not a professional appraisal or financial advice.</p>
        <button type="button" wire:click="generateValuation">Generate estimate</button>

        @if ($error)
            <p role="alert" class="text-red-600">{{ $error }}</p>
        @endif

        @if ($valuation)
            <dl class="grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-2">
                <div><dt class="text-sm text-gray-500">Estimated value</dt><dd class="font-medium">{{ number_format((float) $valuation['estimated_value'], 2) }}</dd></div>
                <div><dt class="text-sm text-gray-500">Confidence</dt><dd class="font-medium">{{ $valuation['confidence_level'] }}%</dd></div>
                <div><dt class="text-sm text-gray-500">Market trend</dt><dd class="font-medium">{{ $valuation['market_trend'] }}</dd></div>
                <div><dt class="text-sm text-gray-500">Estimated range</dt><dd class="font-medium">{{ number_format((float) $valuation['price_range']['min'], 2) }} – {{ number_format((float) $valuation['price_range']['max'], 2) }}</dd></div>
            </dl>
            <button type="button" wire:click="resetValuation">Reset</button>
        @endif
    </section>
</div>
