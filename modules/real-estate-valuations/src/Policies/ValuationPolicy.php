<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Valuations\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Valuations\Models\Valuation;

class ValuationPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Valuation');
    }

    public function view(AuthUser $authUser, Valuation $valuation): bool
    {
        return $authUser->can('View:Valuation');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Valuation');
    }

    public function update(AuthUser $authUser, Valuation $valuation): bool
    {
        return $authUser->can('Update:Valuation');
    }

    public function delete(AuthUser $authUser, Valuation $valuation): bool
    {
        return $authUser->can('Delete:Valuation');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Valuation');
    }

    public function restore(AuthUser $authUser, Valuation $valuation): bool
    {
        return $authUser->can('Restore:Valuation');
    }

    public function forceDelete(AuthUser $authUser, Valuation $valuation): bool
    {
        return $authUser->can('ForceDelete:Valuation');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Valuation');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Valuation');
    }

    public function replicate(AuthUser $authUser, Valuation $valuation): bool
    {
        return $authUser->can('Replicate:Valuation');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Valuation');
    }
}
