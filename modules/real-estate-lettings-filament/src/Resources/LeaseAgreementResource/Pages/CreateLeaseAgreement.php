<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Lettings\Application\CreateLeaseAgreement as CreateLeaseAgreementAction;
use Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource;

final class CreateLeaseAgreement extends CreateRecord
{
    protected static string $resource = LeaseAgreementResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null, 403);

        return app(CreateLeaseAgreementAction::class)->handle($user->current_team_id, $data);
    }
}
