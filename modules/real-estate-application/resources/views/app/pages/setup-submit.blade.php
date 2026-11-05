<x-filament::button type="submit" icon="heroicon-m-check" wire:loading.attr="disabled" wire:target="save">
    <span wire:loading.remove wire:target="save">Finish setup</span>
    <span wire:loading wire:target="save">Saving setup…</span>
</x-filament::button>
