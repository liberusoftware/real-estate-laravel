<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Parties\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Parties\Models\Party;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartyPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Party');
    }

    public function view(AuthUser $authUser, Party $party): bool
    {
        return $authUser->can('View:Party');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Party');
    }

    public function update(AuthUser $authUser, Party $party): bool
    {
        return $authUser->can('Update:Party');
    }

    public function delete(AuthUser $authUser, Party $party): bool
    {
        return $authUser->can('Delete:Party');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Party');
    }

    public function restore(AuthUser $authUser, Party $party): bool
    {
        return $authUser->can('Restore:Party');
    }

    public function forceDelete(AuthUser $authUser, Party $party): bool
    {
        return $authUser->can('ForceDelete:Party');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Party');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Party');
    }

    public function replicate(AuthUser $authUser, Party $party): bool
    {
        return $authUser->can('Replicate:Party');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Party');
    }

}