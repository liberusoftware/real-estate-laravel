<?php

namespace Liberu\Foundation\ModuleManagerFilament\Pages;

use Filament\Pages\Page;
use Liberu\Foundation\ModuleManager\ModuleRegistry;
use Liberu\Foundation\Observability\Contracts\ObservabilityActor;

final class FoundationOperations extends Page
{
    protected string $view = 'module-manager-filament::pages.foundation-operations';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static string|\UnitEnum|null $navigationGroup = 'Operations';

    public static function getNavigationLabel(): string
    {
        return __('filament.pages.foundation_operations');
    }

    public function getTitle(): string
    {
        return __('filament.pages.foundation_operations');
    }

    public array $modules = [];

    public function mount(ModuleRegistry $registry): void
    {
        $this->modules = array_map(fn ($manifest) => $manifest->toArray(), $registry->all());
    }

    public static function canAccess(): bool
    {
        $actor = auth()->user();

        return $actor instanceof ObservabilityActor && $actor->isAdmin();
    }
}
