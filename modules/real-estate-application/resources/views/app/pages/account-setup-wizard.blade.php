<x-filament-panels::page>
    <div class="mx-auto w-full max-w-4xl space-y-6">
        <div class="rounded-2xl bg-gradient-to-br from-primary-600 to-primary-800 p-6 text-white shadow-sm sm:p-8">
            <p class="text-sm font-medium text-white/75">{{ $this->data['site_name'] ?? $this->data['team_name'] ?? 'Your workspace' }}</p>
            <h1 class="mt-2 text-2xl font-semibold tracking-tight sm:text-3xl">Set up your account with confidence</h1>
            <p class="mt-3 max-w-2xl text-sm leading-6 text-white/80">Start with your workspace and branches, add the connections you need, then review before saving. You can return here to update settings at any time.</p>
        </div>

        <form wire:submit="save" class="space-y-6">
            {{ $this->form }}
        </form>

        <details class="rounded-xl border border-gray-200 bg-white p-4 text-sm dark:border-white/10 dark:bg-white/5">
            <summary class="cursor-pointer rounded font-semibold text-gray-950 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-500 dark:text-white">Saved connections and sign-in availability</summary>
            <h2 class="mt-4 font-semibold">Optional connections — saved credentials</h2>
            <div class="mt-3 grid gap-3 sm:grid-cols-2">
                @foreach ($this->connectionReadiness() as $label => $configured)
                    <div wire:key="integration-{{ str($label)->slug() }}" class="flex items-center justify-between gap-3 text-gray-600 dark:text-gray-300">
                        <span>{{ $label }}</span>
                        <span class="text-xs {{ $configured ? 'text-success-600 dark:text-success-400' : 'text-gray-500 dark:text-gray-400' }}">{{ $configured ? 'Credentials saved' : 'Not configured' }}</span>
                    </div>
                @endforeach
            </div>
            <p class="mt-3 text-xs leading-5 text-gray-500 dark:text-gray-400">These indicators reflect saved credentials, not a verified connection. Leave secret fields blank to keep existing values. Optional connections can be added later.</p>
            <h2 class="mt-5 font-semibold">OAuth sign-in availability</h2>
            <div class="mt-3 grid gap-3 sm:grid-cols-2">
                @foreach ($this->oauthProviders() as $provider => $configured)
                    <div wire:key="oauth-{{ str($provider)->slug() }}" class="flex items-center justify-between gap-3 text-gray-600 dark:text-gray-300">
                        <span>{{ $provider }}</span>
                        <span class="text-xs">{{ $configured ? 'Configured' : 'Not configured' }}</span>
                    </div>
                @endforeach
            </div>
            <p class="mt-3 text-xs leading-5 text-gray-500 dark:text-gray-400">An administrator manages sign-in providers for the installation. Workspace credentials apply only to the workspace being configured.</p>
        </details>
    </div>
</x-filament-panels::page>
