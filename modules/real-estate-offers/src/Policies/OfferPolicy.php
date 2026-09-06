<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Offers\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Offers\Models\Offer;

class OfferPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Offer');
    }

    public function view(AuthUser $authUser, Offer $offer): bool
    {
        return $authUser->can('View:Offer');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Offer');
    }

    public function update(AuthUser $authUser, Offer $offer): bool
    {
        return $authUser->can('Update:Offer');
    }

    public function delete(AuthUser $authUser, Offer $offer): bool
    {
        return $authUser->can('Delete:Offer');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Offer');
    }

    public function restore(AuthUser $authUser, Offer $offer): bool
    {
        return $authUser->can('Restore:Offer');
    }

    public function forceDelete(AuthUser $authUser, Offer $offer): bool
    {
        return $authUser->can('ForceDelete:Offer');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Offer');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Offer');
    }

    public function replicate(AuthUser $authUser, Offer $offer): bool
    {
        return $authUser->can('Replicate:Offer');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Offer');
    }
}
