<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource;

final class EditManagementRecord extends EditRecord
{
    protected static string $resource = ManagementRecordResource::class;
}
