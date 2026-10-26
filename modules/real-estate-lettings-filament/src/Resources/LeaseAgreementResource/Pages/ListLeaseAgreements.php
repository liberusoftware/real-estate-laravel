<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource;

final class ListLeaseAgreements extends ListRecords
{
    protected static string $resource = LeaseAgreementResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
