<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-sm font-medium text-primary-600 dark:text-primary-400">{{ $this->roleLabel() }} workspace</p>
                <h2 class="mt-1 text-2xl font-semibold tracking-tight text-gray-950 dark:text-white">Welcome back, {{ auth()->user()?->name }}</h2>
                <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-600 dark:text-gray-300">Here is the information and next action most relevant to your role. Use the shortcuts below to get moving quickly.</p>
            </div>
            <div class="grid gap-3 sm:grid-cols-3 lg:min-w-[34rem]">
                @foreach ($this->quickLinks() as $link)
                    <a href="{{ $link['url'] }}" class="group rounded-xl border border-gray-200 bg-gray-50 p-4 transition hover:border-primary-400 hover:bg-primary-50 dark:border-white/10 dark:bg-white/5 dark:hover:border-primary-500 dark:hover:bg-primary-950/30">
                        <x-filament::icon :icon="$link['icon']" class="h-5 w-5 text-primary-600 transition group-hover:scale-110 dark:text-primary-400" />
                        <p class="mt-3 text-sm font-semibold text-gray-950 dark:text-white">{{ $link['label'] }}</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500 dark:text-gray-400">{{ $link['description'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
