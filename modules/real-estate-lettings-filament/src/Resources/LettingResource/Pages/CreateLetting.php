<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources\LettingResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource;

final class CreateLetting extends CreateRecord
{
    protected static string $resource = LettingResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['team_id'] = auth()->user()->current_team_id;
        $data['created_by'] = auth()->id();

        return $data;
    }
}
