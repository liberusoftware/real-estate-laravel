<x-filament::dropdown placement="bottom-end">
    <x-slot name="trigger">
        <x-filament::icon-button
            icon="heroicon-o-globe-alt"
            color="gray"
            :tooltip="__('Change language')"
            :label="__('Change language')"
        />
    </x-slot>

    <x-filament::dropdown.list>
        @foreach ($availableLocales as $locale => $name)
            <x-filament::dropdown.list.item
                wire:click="switchLanguage('{{ $locale }}')"
                :color="$locale === $currentLocale ? 'primary' : 'gray'"
            >
                {{ $name }}
            </x-filament::dropdown.list.item>
        @endforeach
    </x-filament::dropdown.list>
</x-filament::dropdown>
