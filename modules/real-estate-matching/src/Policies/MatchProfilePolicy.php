<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Matching\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Matching\Models\MatchProfile;

class MatchProfilePolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MatchProfile');
    }

    public function view(AuthUser $authUser, MatchProfile $matchProfile): bool
    {
        return $authUser->can('View:MatchProfile');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MatchProfile');
    }

    public function update(AuthUser $authUser, MatchProfile $matchProfile): bool
    {
        return $authUser->can('Update:MatchProfile');
    }

    public function delete(AuthUser $authUser, MatchProfile $matchProfile): bool
    {
        return $authUser->can('Delete:MatchProfile');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:MatchProfile');
    }

    public function restore(AuthUser $authUser, MatchProfile $matchProfile): bool
    {
        return $authUser->can('Restore:MatchProfile');
    }

    public function forceDelete(AuthUser $authUser, MatchProfile $matchProfile): bool
    {
        return $authUser->can('ForceDelete:MatchProfile');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MatchProfile');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MatchProfile');
    }

    public function replicate(AuthUser $authUser, MatchProfile $matchProfile): bool
    {
        return $authUser->can('Replicate:MatchProfile');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MatchProfile');
    }
}
