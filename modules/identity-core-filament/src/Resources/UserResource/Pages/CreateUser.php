<?php

namespace Liberu\Foundation\IdentityFilament\Resources\UserResource\Pages;

use Filament\Facades\Filament;
use Filament\Resources\Pages\CreateRecord;
use Liberu\Foundation\IdentityFilament\Resources\UserResource;
use Liberu\Foundation\Organizations\Models\Team;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    /**
     * A user created here has no team_user row and no current_team_id by
     * default — HasTenants::getDefaultTenant() reads current_team_id, so an
     * un-attached user can authenticate but can't reach any tenant panel.
     * Attach them to the tenant this record was created under.
     */
    protected function afterCreate(): void
    {
        $team = Filament::getTenant();

        if (! $team instanceof Team) {
            return;
        }

        if (! $team->users()->whereKey($this->record->id)->exists()) {
            $team->users()->attach($this->record->id);
        }

        if ($this->record->current_team_id === null) {
            $this->record->forceFill(['current_team_id' => $team->id])->save();
        }
    }
}
