<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Policies;

use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class ManagementRecordPolicy
{
    public function view($user, ManagementRecord $record): bool
    {
        return (string) $user?->current_team_id === (string) $record->team_id;
    }

    public function update($user, ManagementRecord $record): bool
    {
        return $this->view($user, $record);
    }

    public function delete($user, ManagementRecord $record): bool
    {
        return $this->view($user, $record);
    }
}
