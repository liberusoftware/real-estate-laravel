<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\RegionResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\PropertiesFilament\Resources\RegionResource;

final class ListRegions extends ListRecords
{
    protected static string $resource = RegionResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
