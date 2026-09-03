<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\ChartWidget;
use Liberu\RealEstate\Core\Models\Territory;
use Liberu\RealEstate\Properties\Models\Property;

final class PropertiesByTerritoryChart extends ChartWidget
{
    protected ?string $heading = 'Объекты по территориям';

    protected function getData(): array
    {
        $team = Filament::getTenant();

        if (! $team) {
            return ['datasets' => [], 'labels' => []];
        }

        // Territory has no properties() relation (core deliberately doesn't
        // depend on the properties package — see CLAUDE.md), so aggregate
        // from the properties side and map territory names in PHP instead.
        $counts = Property::query()
            ->forTeam($team->id)
            ->whereNotNull('territory_id')
            ->selectRaw('territory_id, count(*) as aggregate')
            ->groupBy('territory_id')
            ->pluck('aggregate', 'territory_id');

        $territoryNames = Territory::query()
            ->forTeam($team->id)
            ->whereIn('id', $counts->keys())
            ->pluck('name', 'id');

        return [
            'datasets' => [[
                'label' => 'Объекты',
                'data' => $counts->values()->all(),
                'backgroundColor' => '#2f7fd6',
            ]],
            'labels' => $counts->keys()->map(fn ($id) => $territoryNames[$id] ?? "#{$id}")->all(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
