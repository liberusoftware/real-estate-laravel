<x-filament-panels::page>
    <div class="mx-auto w-full max-w-4xl space-y-6">
        <div class="rounded-2xl bg-gradient-to-br from-primary-600 to-primary-800 p-6 text-white shadow-sm sm:p-8">
            <p class="text-sm font-medium text-white/75">A quick start for your workspace</p>
            <h1 class="mt-2 text-2xl font-semibold tracking-tight sm:text-3xl">Set up your account with confidence</h1>
            <p class="mt-3 max-w-2xl text-sm leading-6 text-white/80">Complete the essentials now, then return here whenever you need to update team connections or service credentials. Optional integrations can be added later.</p>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-4 text-sm dark:border-white/10 dark:bg-white/5">
            <h2 class="font-semibold">OAuth sign-in availability & integration readiness</h2>
            <div class="mt-3 grid gap-2 sm:grid-cols-4">
                @foreach ($this->oauthProviders() as $provider => $configured)
                    <div wire:key="oauth-{{ str($provider)->slug() }}" class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                        <x-filament::icon :icon="$configured ? 'heroicon-o-check-circle' : 'heroicon-o-minus-circle'" class="h-4 w-4 {{ $configured ? 'text-success-500' : 'text-gray-400' }}" />
                        <span>{{ $provider }}</span>
                    </div>
                @endforeach
            </div>
            <p class="mt-3 text-xs text-gray-500 dark:text-gray-400">OAuth client IDs and secrets are application-level settings and are configured by an administrator. Team API and portal credentials are stored securely below and are applied only to your current workspace.</p>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-4 text-sm dark:border-white/10 dark:bg-white/5">
            <h2 class="font-semibold">What still needs attention</h2>
            <div class="mt-3 grid gap-2 sm:grid-cols-2">
                @foreach (['openai_api_key' => 'OpenAI', 'walkscore_api_key' => 'Walk Score', 'rightmove_client_id' => 'Rightmove', 'zoopla_certificate' => 'Zoopla', 'onthemarket_certificate' => 'OnTheMarket', 'google_analytics_id' => 'Google Analytics', 'meta_pixel_id' => 'Meta Pixel'] as $key => $label)
                    <div class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                        <x-filament::icon :icon="($this->configuredIntegrations[$key] ?? false) ? 'heroicon-o-check-circle' : 'heroicon-o-minus-circle'" class="h-4 w-4 {{ ($this->configuredIntegrations[$key] ?? false) ? 'text-success-500' : 'text-gray-400' }}" />
                        <span>{{ $label }}</span>
                    </div>
                @endforeach
            </div>
            <p class="mt-3 text-xs text-gray-500 dark:text-gray-400">A missing item is optional unless your team uses that service. Existing secret values are never shown; leave a credential blank to keep it unchanged.</p>
        </div>

        <form wire:submit="save">
            {{ $this->form }}
            <div class="mt-6 flex justify-end">
                <x-filament::button type="submit" icon="heroicon-m-check">Save setup</x-filament::button>
            </div>
        </form>
    </div>
</x-filament-panels::page>
