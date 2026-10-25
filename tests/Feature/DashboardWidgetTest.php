<?php

declare(strict_types=1);

use App\Filament\App\Pages\AccountSetupWizard;
use App\Filament\App\Widgets\RoleStatsWidget;
use App\Filament\App\Widgets\RoleWelcomeWidget;
use App\Filament\Widgets\AdminOverviewWidget;
use App\Http\Middleware\ApplyTeamIntegrationSettings;
use App\Models\User;
use App\Policies\UserPolicy;
use App\Support\TeamIntegrationSettings;
use Illuminate\Http\Request;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\RolesPermissions\Models\Permission;
use Liberu\Foundation\RolesPermissions\Models\Role;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\RealEstate\Properties\Models\Property;
use Livewire\Livewire;
use Symfony\Component\HttpFoundation\Response;

it('shows role-specific statistics and only properties from the active workspace', function (string $role, string $firstLabel): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();
    setPermissionsTeamId($team->id);
    $user->assignRole(Role::query()->create(['name' => $role, 'guard_name' => 'web', 'team_id' => $team->id]));
    $this->actingAs($user);
    foreach ([$team->id, $team->id + 100] as $teamId) {
        Property::query()->create(['team_id' => $teamId, 'created_by' => $user->id, 'property_type' => 'house', 'address' => 'Private workspace property', 'status' => 'available']);
    }
    $stats = (fn () => $this->getStats())->call(new RoleStatsWidget());
    expect($stats)->toHaveCount(3)->and($stats[0]->getLabel())->toBe($firstLabel);
    if (in_array($role, ['seller', 'staff'], true)) {
        expect($stats[0]->getValue())->toBe(1);
    }
    if ($role === 'buyer') {
        expect($stats[2]->getValue())->toBe(1);
    }
    $welcome = new RoleWelcomeWidget();
    expect($welcome->role())->toBe($role)->and($welcome->roleLabel())->toBe(ucfirst($role))
        ->and($welcome->quickLinks())->toHaveCount($role === 'staff' ? 4 : 3);
})->with([
    ['seller', 'My properties'], ['landlord', 'Managed lettings'], ['tenant', 'Applications'],
    ['contractor', 'Assigned work'], ['staff', 'Properties'], ['buyer', 'Saved properties'],
]);

it('returns no workspace statistics for guests and teamless users', function (): void {
    expect((fn () => $this->getStats())->call(new RoleStatsWidget()))->toBe([])
        ->and((fn () => $this->getStats())->call(new AdminOverviewWidget()))->toBe([])
        ->and((new RoleWelcomeWidget())->role())->toBe('buyer');
    $user = User::factory()->create();
    $this->actingAs($user);
    expect((fn () => $this->getStats())->call(new RoleStatsWidget()))->toBe([]);
    $team = Team::factory()->create(['user_id' => $user->id]);
    setPermissionsTeamId($team->id);
    Role::query()->create(['name' => 'staff', 'guard_name' => 'web', 'team_id' => $team->id]);
    $user->assignRole('staff');
    expect((new RoleWelcomeWidget())->quickLinks())->toHaveCount(4);
});

it('limits administrator statistics to the active workspace', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();
    $this->actingAs($user);
    $team->users()->attach($user);
    Property::query()->create(['team_id' => $team->id, 'created_by' => $user->id, 'status' => 'available', 'property_type' => 'house', 'address' => 'Visible']);
    Property::query()->create(['team_id' => $team->id + 100, 'created_by' => $user->id, 'status' => 'available', 'property_type' => 'house', 'address' => 'Other team']);
    $stats = (fn () => $this->getStats())->call(new AdminOverviewWidget());
    expect($stats)->toHaveCount(6)->and($stats[0]->getValue())->toBe(1)
        ->and($stats[1]->getValue())->toBe(1)->and($stats[5]->getValue())->toBe(1);
});

it('requires the team owner to complete workspace setup', function (): void {
    $user = User::factory()->create();
    Livewire::actingAs($user)->test(AccountSetupWizard::class)->call('save')
        ->assertNotified('Create a team before continuing.');
    $team = Team::factory()->create();
    $user->forceFill(['current_team_id' => $team->id])->save();
    Livewire::actingAs($user->fresh())->test(AccountSetupWizard::class)->call('save')
        ->assertNotified('Only the team owner can finish workspace setup.');
    expect($team->fresh()->name)->toBe($team->name);
});

it('applies stored workspace integration credentials to the request', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();
    app(ScopedSettings::class)->put(new TeamIntegrationSettings(), 'team', (string) $team->id, ['openai_api_key' => 'workspace-key']);
    $request = Request::create('/');
    $request->setUserResolver(fn () => $user);
    (new ApplyTeamIntegrationSettings())->handle($request, fn () => new Response('ok'));
    expect(config('services.openai.api_key'))->toBe('workspace-key');
});

it('keeps user administration permissions granular', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    setPermissionsTeamId($team->id);
    $user->forceFill(['current_team_id' => $team->id])->save();
    $policy = new UserPolicy();
    $methods = ['viewAny', 'view', 'create', 'update', 'delete', 'deleteAny', 'restore', 'forceDelete', 'forceDeleteAny', 'restoreAny', 'replicate', 'reorder'];
    foreach ($methods as $method) {
        Permission::query()->firstOrCreate(['name' => ucfirst($method).':User', 'guard_name' => 'web']);
        expect($policy->$method($user))->toBeFalse();
    }
    $user->givePermissionTo('ViewAny:User');
    expect($policy->viewAny($user))->toBeTrue()->and($policy->delete($user))->toBeFalse();
    $user->givePermissionTo(array_map(fn ($method) => ucfirst($method).':User', $methods));
    foreach ($methods as $method) {
        expect($policy->$method($user))->toBeTrue();
    }
});
