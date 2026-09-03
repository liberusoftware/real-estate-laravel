<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Core\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Core\Models\StatusDefinition;

class StatusDefinitionPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:StatusDefinition');
    }

    public function view(AuthUser $authUser, StatusDefinition $statusDefinition): bool
    {
        return $authUser->can('View:StatusDefinition');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:StatusDefinition');
    }

    public function update(AuthUser $authUser, StatusDefinition $statusDefinition): bool
    {
        return $authUser->can('Update:StatusDefinition');
    }

    public function delete(AuthUser $authUser, StatusDefinition $statusDefinition): bool
    {
        return $authUser->can('Delete:StatusDefinition');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:StatusDefinition');
    }

    public function restore(AuthUser $authUser, StatusDefinition $statusDefinition): bool
    {
        return $authUser->can('Restore:StatusDefinition');
    }

    public function forceDelete(AuthUser $authUser, StatusDefinition $statusDefinition): bool
    {
        return $authUser->can('ForceDelete:StatusDefinition');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:StatusDefinition');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:StatusDefinition');
    }

    public function replicate(AuthUser $authUser, StatusDefinition $statusDefinition): bool
    {
        return $authUser->can('Replicate:StatusDefinition');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:StatusDefinition');
    }
}
