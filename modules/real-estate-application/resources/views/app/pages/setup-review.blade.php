<div class="space-y-4">
    <h2 class="text-lg font-semibold text-gray-950 dark:text-white">Review your workspace</h2>
    <dl class="grid gap-4 rounded-xl bg-gray-50 p-4 sm:grid-cols-3 dark:bg-white/5">
        <div>
            <dt class="text-sm text-gray-500 dark:text-gray-400">Workspace</dt>
            <dd class="mt-1 font-medium text-gray-950 dark:text-white">{{ $this->data['team_name'] ?? 'Your workspace' }}</dd>
        </div>
        <div>
            <dt class="text-sm text-gray-500 dark:text-gray-400">Branches to save</dt>
            <dd class="mt-1 font-medium text-gray-950 dark:text-white">{{ count($this->data['branches'] ?? []) }}</dd>
        </div>
        <div>
            <dt class="text-sm text-gray-500 dark:text-gray-400">Portal timeout</dt>
            <dd class="mt-1 font-medium text-gray-950 dark:text-white">{{ $this->data['portal_timeout'] ?? 30 }} seconds</dd>
        </div>
    </dl>
    @if (isset($this->data['installation_mode']))
        <dl class="grid gap-4 rounded-xl bg-gray-50 p-4 sm:grid-cols-3 dark:bg-white/5">
            <div><dt class="text-sm text-gray-500 dark:text-gray-400">Installation</dt><dd class="mt-1 font-medium">{{ $this->data['installation_mode'] === 'saas' ? 'SaaS' : 'Dedicated installation' }}</dd></div>
            <div><dt class="text-sm text-gray-500 dark:text-gray-400">Platform</dt><dd class="mt-1 font-medium">{{ $this->data['site_name'] ?? '' }}</dd></div>
            <div><dt class="text-sm text-gray-500 dark:text-gray-400">Support email</dt><dd class="mt-1 break-all font-medium">{{ $this->data['site_email'] ?? '' }}</dd></div>
        </dl>
    @endif
    <p class="text-sm leading-6 text-gray-600 dark:text-gray-300">Existing credentials are kept when fields are blank. Branches omitted here are preserved. Saving does not publish listings or verify connections; check your credentials and branch references before starting a portal sync.</p>
</div>
