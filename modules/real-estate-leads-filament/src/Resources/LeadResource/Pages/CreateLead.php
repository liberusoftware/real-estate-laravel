<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LeadsFilament\Resources\LeadResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Leads\Application\CreateLead as CreateLeadAction;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource;

final class CreateLead extends CreateRecord
{
    protected static string $resource = LeadResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null, 403);

        return app(CreateLeadAction::class)->handle($user->current_team_id, $data);
    }
}
