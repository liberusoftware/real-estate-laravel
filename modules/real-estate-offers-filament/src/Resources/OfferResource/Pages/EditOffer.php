<?php

declare(strict_types=1);

namespace Liberu\RealEstate\OffersFilament\Resources\OfferResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Offers\Application\UpdateOffer;
use Liberu\RealEstate\OffersFilament\Resources\OfferResource;

final class EditOffer extends EditRecord
{
    protected static string $resource = OfferResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $teamId = auth()->user()?->current_team_id;
        abort_unless($teamId !== null && (string) $teamId === (string) $record->team_id, 403);

        return app(UpdateOffer::class)->handle($record, $teamId, auth()->id(), $data);
    }
}
