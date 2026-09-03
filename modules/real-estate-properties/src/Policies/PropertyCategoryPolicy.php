<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Properties\Models\PropertyCategory;

class PropertyCategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PropertyCategory');
    }

    public function view(AuthUser $authUser, PropertyCategory $propertyCategory): bool
    {
        return $authUser->can('View:PropertyCategory');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PropertyCategory');
    }

    public function update(AuthUser $authUser, PropertyCategory $propertyCategory): bool
    {
        return $authUser->can('Update:PropertyCategory');
    }

    public function delete(AuthUser $authUser, PropertyCategory $propertyCategory): bool
    {
        return $authUser->can('Delete:PropertyCategory');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:PropertyCategory');
    }

    public function restore(AuthUser $authUser, PropertyCategory $propertyCategory): bool
    {
        return $authUser->can('Restore:PropertyCategory');
    }

    public function forceDelete(AuthUser $authUser, PropertyCategory $propertyCategory): bool
    {
        return $authUser->can('ForceDelete:PropertyCategory');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PropertyCategory');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PropertyCategory');
    }

    public function replicate(AuthUser $authUser, PropertyCategory $propertyCategory): bool
    {
        return $authUser->can('Replicate:PropertyCategory');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PropertyCategory');
    }
}
