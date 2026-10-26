<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\CityResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Properties\Models\City;
use Liberu\RealEstate\PropertiesFilament\Resources\CityResource;

final class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        return City::query()->create([
            'region_id' => $data['region_id'],
            'name' => $data['name'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['name'])->slug()->toString(),
        ]);
    }
}
