<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources\LettingResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource;

final class ListLettings extends ListRecords
{
    protected static string $resource = LettingResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
