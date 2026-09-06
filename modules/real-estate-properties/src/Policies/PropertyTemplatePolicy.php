<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Properties\Models\PropertyTemplate;

class PropertyTemplatePolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PropertyTemplate');
    }

    public function view(AuthUser $authUser, PropertyTemplate $propertyTemplate): bool
    {
        return $authUser->can('View:PropertyTemplate');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PropertyTemplate');
    }

    public function update(AuthUser $authUser, PropertyTemplate $propertyTemplate): bool
    {
        return $authUser->can('Update:PropertyTemplate');
    }

    public function delete(AuthUser $authUser, PropertyTemplate $propertyTemplate): bool
    {
        return $authUser->can('Delete:PropertyTemplate');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:PropertyTemplate');
    }

    public function restore(AuthUser $authUser, PropertyTemplate $propertyTemplate): bool
    {
        return $authUser->can('Restore:PropertyTemplate');
    }

    public function forceDelete(AuthUser $authUser, PropertyTemplate $propertyTemplate): bool
    {
        return $authUser->can('ForceDelete:PropertyTemplate');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PropertyTemplate');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PropertyTemplate');
    }

    public function replicate(AuthUser $authUser, PropertyTemplate $propertyTemplate): bool
    {
        return $authUser->can('Replicate:PropertyTemplate');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PropertyTemplate');
    }
}
