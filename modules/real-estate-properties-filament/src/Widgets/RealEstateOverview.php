<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;
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
            PropertyStatus::Published->value,
            PropertyStatus::UnderOffer->value,
        ])->count();
        $currency = (string) config('app.currency', 'USD');
        $averagePrice = (clone $properties)->where('currency', $currency)->whereNotNull('price')->avg('price');

        return [
            Stat::make(__('Territories'), Territory::query()->forTeam($team->id)->count())
                ->icon('heroicon-o-map'),
            Stat::make(__('Total properties'), (clone $properties)->count())
                ->icon('heroicon-o-building-office-2'),
            Stat::make(__('Active listings'), $activeCount)
                ->icon('heroicon-o-megaphone')
                ->color('success'),
            Stat::make(__('Average price'), $averagePrice !== null ? Number::currency((float) $averagePrice, in: $currency) : '—')
                ->icon('heroicon-o-banknotes'),
        ];
    }
}
