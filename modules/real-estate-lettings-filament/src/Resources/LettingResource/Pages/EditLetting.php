<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources\LettingResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource;

final class EditLetting extends EditRecord
{
    protected static string $resource = LettingResource::class;
}
