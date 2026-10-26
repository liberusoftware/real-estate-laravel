<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Lettings\Application\UpdateLeaseAgreement as UpdateLeaseAgreementAction;
use Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource;

final class EditLeaseAgreement extends EditRecord
{
    protected static string $resource = LeaseAgreementResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null && (string) $user->current_team_id === (string) $record->team_id, 403);

        return app(UpdateLeaseAgreementAction::class)->handle($record, $user->current_team_id, $data);
    }
}
