<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LeadsFilament\Resources\LeadResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource;

final class ListLeads extends ListRecords
{
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
