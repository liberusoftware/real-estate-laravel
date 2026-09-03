<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Instructions\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User as AuthUser;
use Liberu\RealEstate\Instructions\Models\Instruction;

class InstructionPolicy
{
    use HandlesAuthorization;

    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Instruction');
    }

    public function view(AuthUser $authUser, Instruction $instruction): bool
    {
        return $authUser->can('View:Instruction');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Instruction');
    }

    public function update(AuthUser $authUser, Instruction $instruction): bool
    {
        return $authUser->can('Update:Instruction');
    }

    public function delete(AuthUser $authUser, Instruction $instruction): bool
    {
        return $authUser->can('Delete:Instruction');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Instruction');
    }

    public function restore(AuthUser $authUser, Instruction $instruction): bool
    {
        return $authUser->can('Restore:Instruction');
    }

    public function forceDelete(AuthUser $authUser, Instruction $instruction): bool
    {
        return $authUser->can('ForceDelete:Instruction');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Instruction');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Instruction');
    }

    public function replicate(AuthUser $authUser, Instruction $instruction): bool
    {
        return $authUser->can('Replicate:Instruction');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Instruction');
    }
}
