<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Properties\Models\District;
use Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource;

final class CreateDistrict extends CreateRecord
{
    protected static string $resource = DistrictResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        return District::query()->create([
            'city_id' => $data['city_id'],
            'name' => $data['name'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['name'])->slug()->toString(),
        ]);
    }
}
