<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Viewings\Models\Viewing;

class ViewingPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Viewing');
    }

    public function view(AuthUser $authUser, Viewing $viewing): bool
    {
        return $authUser->can('View:Viewing');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Viewing');
    }

    public function update(AuthUser $authUser, Viewing $viewing): bool
    {
        return $authUser->can('Update:Viewing');
    }

    public function delete(AuthUser $authUser, Viewing $viewing): bool
    {
        return $authUser->can('Delete:Viewing');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Viewing');
    }

    public function restore(AuthUser $authUser, Viewing $viewing): bool
    {
        return $authUser->can('Restore:Viewing');
    }

    public function forceDelete(AuthUser $authUser, Viewing $viewing): bool
    {
        return $authUser->can('ForceDelete:Viewing');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Viewing');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Viewing');
    }

    public function replicate(AuthUser $authUser, Viewing $viewing): bool
    {
        return $authUser->can('Replicate:Viewing');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Viewing');
    }
}
