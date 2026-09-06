<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PortalsReporting\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\PortalsReporting\Models\PortalReport;

class PortalReportPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PortalReport');
    }

    public function view(AuthUser $authUser, PortalReport $portalReport): bool
    {
        return $authUser->can('View:PortalReport');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PortalReport');
    }

    public function update(AuthUser $authUser, PortalReport $portalReport): bool
    {
        return $authUser->can('Update:PortalReport');
    }

    public function delete(AuthUser $authUser, PortalReport $portalReport): bool
    {
        return $authUser->can('Delete:PortalReport');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:PortalReport');
    }

    public function restore(AuthUser $authUser, PortalReport $portalReport): bool
    {
        return $authUser->can('Restore:PortalReport');
    }

    public function forceDelete(AuthUser $authUser, PortalReport $portalReport): bool
    {
        return $authUser->can('ForceDelete:PortalReport');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PortalReport');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PortalReport');
    }

    public function replicate(AuthUser $authUser, PortalReport $portalReport): bool
    {
        return $authUser->can('Replicate:PortalReport');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PortalReport');
    }
}
