<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">Welcome to your workspace</x-slot>
        <x-slot name="description">Set your name and language in two short steps. Your workspace owner manages branches and portal connections.</x-slot>
        <form wire:submit="save">
            {{ $this->form }}
        </form>
    </x-filament::section>
</x-filament-panels::page>
