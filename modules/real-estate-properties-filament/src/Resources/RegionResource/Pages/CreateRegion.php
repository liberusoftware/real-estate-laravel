<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\RegionResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Properties\Models\Region;
use Liberu\RealEstate\PropertiesFilament\Resources\RegionResource;

final class CreateRegion extends CreateRecord
{
    protected static string $resource = RegionResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        return Region::query()->create([
            'name' => $data['name'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['name'])->slug()->toString(),
        ]);
    }
}
