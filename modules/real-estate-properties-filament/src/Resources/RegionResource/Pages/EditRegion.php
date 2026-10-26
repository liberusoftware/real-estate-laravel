<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources\RegionResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\PropertiesFilament\Resources\RegionResource;

final class EditRegion extends EditRecord
{
    protected static string $resource = RegionResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update([
            'name' => $data['name'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['name'])->slug()->toString(),
        ]);

        return $record;
    }
}
