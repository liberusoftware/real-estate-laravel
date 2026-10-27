<?php

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\RolesPermissions\Models\Role;
use Liberu\RealEstate\Application\Database\Seeders\RolesSeeder;
use Liberu\RealEstate\Application\Database\Seeders\TeamSeeder;

use function Pest\Laravel\seed;

uses(RefreshDatabase::class);

it('seeds the complete workspace role catalog', function () {
    seed(TeamSeeder::class);
    seed(RolesSeeder::class);

    expect(Role::query()->pluck('name')->sort()->values()->all())->toBe([
        'admin',
        'buyer',
        'contractor',
        'landlord',
        'seller',
        'staff',
        'super_admin',
        'tenant',
    ]);
});

it('uses buyer as the safe dashboard persona for new users', function () {
    $user = User::factory()->create();

    expect($user->dashboardRole())->toBe('buyer')
        ->and($user->hasAdminAccess())->toBeFalse()
        ->and($user->canAccessPanel(Filament::getPanel('app')))->toBeTrue()
        ->and($user->canAccessPanel(Filament::getPanel('admin')))->toBeFalse();
});

it('supports every workspace persona and limits the admin panel to operational roles', function (string $role, bool $adminAccess) {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    setPermissionsTeamId($team->id);
    $user->assignRole(Role::create([
        'name' => $role,
        'guard_name' => 'web',
        'team_id' => $team->id,
    ]));

    expect($user->dashboardRole())->toBe($role)
        ->and($user->hasAdminAccess())->toBe($adminAccess)
        ->and($user->canAccessPanel(Filament::getPanel('app')))->toBeTrue()
        ->and($user->canAccessPanel(Filament::getPanel('admin')))->toBe($adminAccess);
})->with([
    ['buyer', false],
    ['seller', false],
    ['landlord', false],
    ['tenant', false],
    ['contractor', false],
    ['staff', true],
    ['admin', true],
    ['super_admin', true],
]);
