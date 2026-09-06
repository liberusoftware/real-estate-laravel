<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Properties\Models\Property;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropertyPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Property');
    }

    public function view(AuthUser $authUser, Property $property): bool
    {
        return $authUser->can('View:Property');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Property');
    }

    public function update(AuthUser $authUser, Property $property): bool
    {
        return $authUser->can('Update:Property');
    }

    public function delete(AuthUser $authUser, Property $property): bool
    {
        return $authUser->can('Delete:Property');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Property');
    }

    public function restore(AuthUser $authUser, Property $property): bool
    {
        return $authUser->can('Restore:Property');
    }

    public function forceDelete(AuthUser $authUser, Property $property): bool
    {
        return $authUser->can('ForceDelete:Property');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Property');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Property');
    }

    public function replicate(AuthUser $authUser, Property $property): bool
    {
        return $authUser->can('Replicate:Property');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Property');
    }

}