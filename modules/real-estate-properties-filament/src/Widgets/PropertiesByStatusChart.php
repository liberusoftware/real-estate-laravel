<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\ChartWidget;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;

final class PropertiesByStatusChart extends ChartWidget
{
    protected ?string $heading = 'Объекты по статусам';

    private const LABELS = [
        'draft' => 'Черновик',
        'available' => 'Доступен',
        'under_offer' => 'Предложение принято',
        'sold' => 'Продан',
        'let' => 'Сдан в аренду',
        'withdrawn' => 'Снят с продажи',
    ];

    private const COLORS = [
        'draft' => '#94a3b8',
        'available' => '#2f7fd6',
        'under_offer' => '#c2622d',
        'sold' => '#1c63b3',
        'let' => '#3d9970',
        'withdrawn' => '#64748b',
    ];

    protected function getData(): array
    {
        $team = Filament::getTenant();

        if (! $team) {
            return ['datasets' => [], 'labels' => []];
        }

        $counts = Property::query()
            ->forTeam($team->id)
            ->selectRaw('status, count(*) as aggregate')
            ->groupBy('status')
            ->pluck('aggregate', 'status');

        $order = array_column(PropertyStatus::cases(), 'value');
        $counts = $counts->sortBy(fn ($value, $key) => array_search($key, $order, true));

        return [
            'datasets' => [[
                'data' => $counts->values()->all(),
                'backgroundColor' => $counts->keys()->map(fn ($status) => self::COLORS[$status] ?? '#94a3b8')->all(),
            ]],
            'labels' => $counts->keys()->map(fn ($status) => self::LABELS[$status] ?? $status)->all(),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
