<?php

declare(strict_types=1);

namespace Liberu\RealEstate\SalesProgression\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\SalesProgression\Models\SalesProgression;

class SalesProgressionPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SalesProgression');
    }

    public function view(AuthUser $authUser, SalesProgression $salesProgression): bool
    {
        return $authUser->can('View:SalesProgression');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SalesProgression');
    }

    public function update(AuthUser $authUser, SalesProgression $salesProgression): bool
    {
        return $authUser->can('Update:SalesProgression');
    }

    public function delete(AuthUser $authUser, SalesProgression $salesProgression): bool
    {
        return $authUser->can('Delete:SalesProgression');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:SalesProgression');
    }

    public function restore(AuthUser $authUser, SalesProgression $salesProgression): bool
    {
        return $authUser->can('Restore:SalesProgression');
    }

    public function forceDelete(AuthUser $authUser, SalesProgression $salesProgression): bool
    {
        return $authUser->can('ForceDelete:SalesProgression');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SalesProgression');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SalesProgression');
    }

    public function replicate(AuthUser $authUser, SalesProgression $salesProgression): bool
    {
        return $authUser->can('Replicate:SalesProgression');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SalesProgression');
    }
}
