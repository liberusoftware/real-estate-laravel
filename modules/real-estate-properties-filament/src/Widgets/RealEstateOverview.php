<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Liberu\RealEstate\Core\Models\Territory;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;

final class RealEstateOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $team = Filament::getTenant();

        if (! $team) {
            return [];
        }

        $properties = Property::query()->forTeam($team->id);
        $activeCount = (clone $properties)->whereIn('status', [
            PropertyStatus::Available->value,
            PropertyStatus::UnderOffer->value,
        ])->count();
        $averagePrice = (clone $properties)->whereNotNull('price')->avg('price');

        return [
            Stat::make('Территорий', Territory::query()->forTeam($team->id)->count())
                ->icon('heroicon-o-map'),
            Stat::make('Объектов всего', (clone $properties)->count())
                ->icon('heroicon-o-building-office-2'),
            Stat::make('Активные объявления', $activeCount)
                ->icon('heroicon-o-megaphone')
                ->color('success'),
            Stat::make('Средняя цена', $averagePrice ? number_format((float) $averagePrice, 0, ',', ' ').' TJS' : '—')
                ->icon('heroicon-o-banknotes'),
        ];
    }
}
