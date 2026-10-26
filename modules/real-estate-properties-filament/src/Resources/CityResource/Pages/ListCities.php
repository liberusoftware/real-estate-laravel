<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\CityResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\PropertiesFilament\Resources\CityResource;

final class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
