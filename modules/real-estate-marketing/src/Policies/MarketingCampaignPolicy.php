<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Marketing\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Marketing\Models\MarketingCampaign;

class MarketingCampaignPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:MarketingCampaign');
    }

    public function view(AuthUser $authUser, MarketingCampaign $marketingCampaign): bool
    {
        return $authUser->can('View:MarketingCampaign');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:MarketingCampaign');
    }

    public function update(AuthUser $authUser, MarketingCampaign $marketingCampaign): bool
    {
        return $authUser->can('Update:MarketingCampaign');
    }

    public function delete(AuthUser $authUser, MarketingCampaign $marketingCampaign): bool
    {
        return $authUser->can('Delete:MarketingCampaign');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:MarketingCampaign');
    }

    public function restore(AuthUser $authUser, MarketingCampaign $marketingCampaign): bool
    {
        return $authUser->can('Restore:MarketingCampaign');
    }

    public function forceDelete(AuthUser $authUser, MarketingCampaign $marketingCampaign): bool
    {
        return $authUser->can('ForceDelete:MarketingCampaign');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:MarketingCampaign');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:MarketingCampaign');
    }

    public function replicate(AuthUser $authUser, MarketingCampaign $marketingCampaign): bool
    {
        return $authUser->can('Replicate:MarketingCampaign');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:MarketingCampaign');
    }
}
