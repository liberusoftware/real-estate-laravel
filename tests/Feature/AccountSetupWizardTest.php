<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\RealEstate\Application\Filament\App\Pages\AccountSetupWizard;
use Liberu\RealEstate\Application\Support\TeamIntegrationSettings;
use Livewire\Livewire;

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
