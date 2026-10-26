<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource;

final class ListDistricts extends ListRecords
{
    protected static string $resource = DistrictResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
