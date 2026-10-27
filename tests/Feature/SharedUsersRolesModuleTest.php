<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Liberu\Foundation\RolesPermissions\Models\Role;
use Liberu\Foundation\UsersRoles\Models\User as SharedUser;
use Liberu\Foundation\UsersRoles\Services\UserRoleLookup;

it('keeps the host user identity when creating users through module factories', function () {
    $user = User::factory()->create();

    expect($user)->toBeInstanceOf(SharedUser::class)
        ->and($user::class)->toBe(User::class)
        ->and($user->getMorphClass())->toBe(User::class);
});

it('does not query role assignments for an unsaved user or an empty role list', function () {
    DB::enableQueryLog();
    DB::flushQueryLog();

    $lookup = app(UserRoleLookup::class);

    expect($lookup->hasRoleInAnyTeam(new User(), 'super_admin'))->toBeFalse()
        ->and($lookup->hasRoleInAnyTeam((new User())->forceFill(['id' => 123]), []))->toBeFalse()
        ->and(DB::getQueryLog())->toBe([]);

    DB::disableQueryLog();
});

it('checks role ownership across teams while preserving the user morph type', function () {
    $user = User::factory()->withPersonalTeam()->create();
    $otherUser = User::factory()->withPersonalTeam()->create();
    setPermissionsTeamId($user->ownedTeams()->firstOrFail()->id);
    $role = Role::create(['name' => 'module_operator', 'guard_name' => 'web']);
    $user->assignRole($role);

    setPermissionsTeamId($otherUser->ownedTeams()->firstOrFail()->id);

    expect($user->hasRoleInAnyTeam(['unassigned', 'module_operator']))->toBeTrue()
        ->and($otherUser->hasRoleInAnyTeam('module_operator'))->toBeFalse();
});
