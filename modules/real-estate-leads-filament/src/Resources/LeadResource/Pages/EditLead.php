<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LeadsFilament\Resources\LeadResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Leads\Application\UpdateLead as UpdateLeadAction;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource;

final class EditLead extends EditRecord
{
    protected static string $resource = LeadResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null && (string) $user->current_team_id === (string) $record->team_id, 403);

        return app(UpdateLeadAction::class)->handle($record, $user->current_team_id, $data);
    }
}
