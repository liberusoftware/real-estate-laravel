<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Core\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Core\Models\Branch;
use Illuminate\Auth\Access\HandlesAuthorization;

class BranchPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Branch');
    }

    public function view(AuthUser $authUser, Branch $branch): bool
    {
        return $authUser->can('View:Branch');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Branch');
    }

    public function update(AuthUser $authUser, Branch $branch): bool
    {
        return $authUser->can('Update:Branch');
    }

    public function delete(AuthUser $authUser, Branch $branch): bool
    {
        return $authUser->can('Delete:Branch');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Branch');
    }

    public function restore(AuthUser $authUser, Branch $branch): bool
    {
        return $authUser->can('Restore:Branch');
    }

    public function forceDelete(AuthUser $authUser, Branch $branch): bool
    {
        return $authUser->can('ForceDelete:Branch');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Branch');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Branch');
    }

    public function replicate(AuthUser $authUser, Branch $branch): bool
    {
        return $authUser->can('Replicate:Branch');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Branch');
    }

}