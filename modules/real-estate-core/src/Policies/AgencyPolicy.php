<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Core\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Core\Models\Agency;
use Illuminate\Auth\Access\HandlesAuthorization;

class AgencyPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Agency');
    }

    public function view(AuthUser $authUser, Agency $agency): bool
    {
        return $authUser->can('View:Agency');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Agency');
    }

    public function update(AuthUser $authUser, Agency $agency): bool
    {
        return $authUser->can('Update:Agency');
    }

    public function delete(AuthUser $authUser, Agency $agency): bool
    {
        return $authUser->can('Delete:Agency');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Agency');
    }

    public function restore(AuthUser $authUser, Agency $agency): bool
    {
        return $authUser->can('Restore:Agency');
    }

    public function forceDelete(AuthUser $authUser, Agency $agency): bool
    {
        return $authUser->can('ForceDelete:Agency');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Agency');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Agency');
    }

    public function replicate(AuthUser $authUser, Agency $agency): bool
    {
        return $authUser->can('Replicate:Agency');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Agency');
    }

}