<?php

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\RolesPermissions\Models\Role;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\Foundation\Settings\Settings\SiteSettings;
use Liberu\RealEstate\Application\Filament\App\Pages\AccountSetupWizard;
use Liberu\RealEstate\Application\Filament\App\Pages\PersonalSetupWizard;
use Liberu\RealEstate\Application\Filament\Pages\InstallationSetupWizard;
use Liberu\RealEstate\Application\Http\Middleware\ApplyTeamIntegrationSettings;
use Liberu\RealEstate\Application\Support\TeamIntegrationSettings;
use Liberu\RealEstate\Core\Models\Branch;
use Livewire\Livewire;
use Symfony\Component\HttpFoundation\Response;

uses(RefreshDatabase::class);

it('redirects a newly registered user to the setup guide', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertRedirect(route('filament.app.pages.setup'));
});

it('saves the team setup and encrypts integration credentials', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    Livewire::actingAs($user)
        ->test(AccountSetupWizard::class)
        ->set('data.team_name', 'Northstar Estates')
        ->set('data.openai_api_key', 'sk-team-secret')
        ->set('data.google_analytics_id', 'G-123456')
        ->call('save')
        ->assertHasNoErrors();

    expect($team->refresh()->name)->toBe('Northstar Estates')
        ->and(DB::table('scoped_settings')->where('scope_type', 'team')->where('scope_id', $team->id)->where('key', 'team.setup_completed')->value('value'))->toBe('true')
        ->and(DB::table('scoped_settings')->where('scope_type', 'team')->where('scope_id', $team->id)->where('key', 'team.integrations')->value('secret'))->toBe(1)
        ->and(DB::table('scoped_settings')->where('scope_type', 'team')->where('scope_id', $team->id)->where('key', 'team.integrations')->value('value'))->not->toContain('sk-team-secret');
});

it('renders the setup guide in the app panel', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    $this->actingAs($user)
        ->get(route('filament.app.pages.setup'))
        ->assertSuccessful()
        ->assertSee('Set up your account with confidence')
        ->assertSee('OAuth sign-in availability');
});

it('keeps existing team credentials when optional fields are left blank', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    app(ScopedSettings::class)->put(
        new TeamIntegrationSettings(),
        'team',
        (string) $team->id,
        ['openai_api_key' => 'existing-secret', 'google_analytics_id' => 'G-existing'],
    );

    Livewire::actingAs($user)
        ->test(AccountSetupWizard::class)
        ->set('data.team_name', 'Updated Estates')
        ->call('save')
        ->assertHasNoErrors();

    $settings = app(ScopedSettings::class)->resolve('team.integrations', ['team' => $team->id], []);

    expect($settings)->toMatchArray([
        'openai_api_key' => 'existing-secret',
        'google_analytics_id' => 'G-existing',
    ]);
});

it('upserts branches only inside the current workspace and preserves omitted branches', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $otherTeam = Team::factory()->create();
    $user->forceFill(['current_team_id' => $team->id])->save();
    $otherBranch = Branch::create(['team_id' => $otherTeam->id, 'code' => 'HQ', 'name' => 'Other office']);
    $preserved = Branch::create(['team_id' => $team->id, 'code' => 'KEEP', 'name' => 'Existing office']);

    Livewire::actingAs($user)->test(AccountSetupWizard::class)
        ->set('data.branches', [['name' => 'Head office', 'code' => 'HQ', 'email' => 'office@example.com', 'phone' => '123']])
        ->set('data.portal_timeout', 45)
        ->call('save')->assertHasNoErrors();

    expect($otherBranch->refresh()->name)->toBe('Other office')
        ->and($preserved->fresh())->not->toBeNull();
    $this->assertDatabaseHas('real_estate_branches', ['team_id' => $team->id, 'code' => 'HQ', 'name' => 'Head office']);
    expect(app(ScopedSettings::class)->resolve('team.integrations', ['team' => $team->id], [])['portal_timeout'])->toBe(45);
});

it('does not expose workspace credentials to invited members', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create();
    $team->users()->attach($user, ['role' => 'editor']);
    $user->forceFill(['current_team_id' => $team->id])->save();

    $this->actingAs($user)->get(route('filament.app.pages.setup'))->assertForbidden();
    $this->get(route('dashboard'))->assertRedirect(route('filament.app.pages.welcome'));
});

it('validates branch codes and sync request limits before saving', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    Livewire::actingAs($user)->test(AccountSetupWizard::class)
        ->set('data.portal_timeout', 500)
        ->call('save')->assertHasErrors(['data.portal_timeout']);
    expect(AccountSetupWizard::isComplete())->toBeFalse();
});

it('saves personal onboarding without changing workspace settings', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create();
    $user->forceFill(['current_team_id' => $team->id])->save();

    Livewire::actingAs($user)->test(PersonalSetupWizard::class)
        ->set('data.name', 'Alex Newuser')->set('data.locale', 'en')
        ->call('save')->assertHasNoErrors()->assertRedirect(route('filament.app.pages.dashboard'));

    expect($user->refresh()->name)->toBe('Alex Newuser')
        ->and(PersonalSetupWizard::isComplete())->toBeTrue()
        ->and(AccountSetupWizard::isComplete())->toBeFalse();
});

it('restricts installation setup to super admins and saves platform identity', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();
    $this->actingAs($user);
    expect(InstallationSetupWizard::canAccess())->toBeFalse();
    setPermissionsTeamId($team->id);
    $role = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web', 'team_id' => $team->id]);
    $user->assignRole($role);
    Filament::setCurrentPanel(Filament::getPanel('admin'));
    Filament::setTenant($team);

    Livewire::actingAs($user)->test(InstallationSetupWizard::class)
        ->set('data.installation_mode', 'saas')
        ->set('data.site_name', 'Northstar Platform')
        ->set('data.site_email', 'support@example.com')
        ->call('save')->assertHasNoErrors();

    expect(app(ScopedSettings::class)->resolve('platform.installation', ['global' => '0'], [])['mode'])->toBe('saas')
        ->and(app(SiteSettings::class)->site_name)->toBe('Northstar Platform');
});

it('applies sync settings for the selected admin workspace instead of the default workspace', function (): void {
    $user = User::factory()->create();
    $this->actingAs($user);
    $defaultTeam = Team::factory()->create(['user_id' => $user->id]);
    $selectedTeam = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $defaultTeam->id])->save();
    app(ScopedSettings::class)->put(new TeamIntegrationSettings(), 'team', (string) $defaultTeam->id, ['portal_timeout' => 10]);
    app(ScopedSettings::class)->put(new TeamIntegrationSettings(), 'team', (string) $selectedTeam->id, ['portal_timeout' => 60]);
    Filament::setCurrentPanel(Filament::getPanel('admin'));
    Filament::setTenant($selectedTeam);
    $request = Request::create('/admin/'.$selectedTeam->id);
    $request->setUserResolver(fn () => $user);
    $originalTimeout = config('rightmove.timeout');
    (new ApplyTeamIntegrationSettings())->handle($request, function (): Response {
        expect(config('rightmove.timeout'))->toBe(60);

        return new Response('ok');
    });
    expect(config('rightmove.timeout'))->toBe($originalTimeout);
});

it('requires both portal credentials before reporting a saved connection', function (): void {
    $wizard = new AccountSetupWizard();
    $wizard->configuredIntegrations = [
        'rightmove_client_id' => true,
        'rightmove_client_secret' => false,
        'zoopla_certificate' => true,
        'zoopla_key' => true,
    ];

    expect($wizard->connectionReadiness())
        ->toMatchArray(['Rightmove' => false, 'Zoopla' => true, 'OnTheMarket' => false]);
});

it('rejects saving setup after the current workspace changes', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $otherTeam = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();
    $wizard = Livewire::actingAs($user)->test(AccountSetupWizard::class);
    $user->forceFill(['current_team_id' => $otherTeam->id])->save();
    $user->unsetRelation('latestTeam');

    $wizard->set('data.team_name', 'Wrong workspace')->call('save')->assertForbidden();
    expect($otherTeam->refresh()->name)->not->toBe('Wrong workspace');
});
