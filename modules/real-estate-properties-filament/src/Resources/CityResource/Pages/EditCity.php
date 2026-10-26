<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\CityResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\PropertiesFilament\Resources\CityResource;

final class EditCity extends EditRecord
{
    protected static string $resource = CityResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update([
            'region_id' => $data['region_id'],
            'name' => $data['name'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['name'])->slug()->toString(),
        ]);

        return $record;
    }
}
