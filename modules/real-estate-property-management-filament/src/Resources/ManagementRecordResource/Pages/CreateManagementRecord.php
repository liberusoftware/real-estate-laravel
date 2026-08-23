<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource;

final class CreateManagementRecord extends CreateRecord
{
    protected static string $resource = ManagementRecordResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['team_id'] = auth()->user()->current_team_id;
        $data['created_by'] = auth()->id();

        return $data;
    }
}
