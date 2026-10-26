<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource;

final class EditDistrict extends EditRecord
{
    protected static string $resource = DistrictResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update([
            'city_id' => $data['city_id'],
            'name' => $data['name'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['name'])->slug()->toString(),
        ]);

        return $record;
    }
}
