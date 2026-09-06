<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;

class MediaDocumentPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MediaDocument');
    }

    public function view(AuthUser $authUser, MediaDocument $mediaDocument): bool
    {
        return $authUser->can('View:MediaDocument');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MediaDocument');
    }

    public function update(AuthUser $authUser, MediaDocument $mediaDocument): bool
    {
        return $authUser->can('Update:MediaDocument');
    }

    public function delete(AuthUser $authUser, MediaDocument $mediaDocument): bool
    {
        return $authUser->can('Delete:MediaDocument');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:MediaDocument');
    }

    public function restore(AuthUser $authUser, MediaDocument $mediaDocument): bool
    {
        return $authUser->can('Restore:MediaDocument');
    }

    public function forceDelete(AuthUser $authUser, MediaDocument $mediaDocument): bool
    {
        return $authUser->can('ForceDelete:MediaDocument');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MediaDocument');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MediaDocument');
    }

    public function replicate(AuthUser $authUser, MediaDocument $mediaDocument): bool
    {
        return $authUser->can('Replicate:MediaDocument');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MediaDocument');
    }
}
