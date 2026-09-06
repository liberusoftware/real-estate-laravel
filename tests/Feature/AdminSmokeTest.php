<?php

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\RolesPermissions\Models\Role;

it('loads every registered admin panel resource index and create page without a fatal error', function () {
    $owner = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $owner->id]);
    $owner->forceFill(['current_team_id' => $team->id])->save();

    setPermissionsTeamId($team->id);
    $owner->assignRole(Role::create(['name' => 'super_admin', 'guard_name' => 'web']));
    Gate::before(fn ($user) => $user->hasRole('super_admin') ? true : null);

    $this->actingAs($owner);

    $router = app('router');
    $slugs = [];
    foreach ($router->getRoutes() as $route) {
        $uri = $route->uri();
        if (str_starts_with($uri, 'admin/{tenant}/') && in_array('GET', $route->methods(), true) && ! str_contains($uri, '{record}') && substr_count($uri, '/') === 2) {
            $slugs[] = substr($uri, strlen('admin/{tenant}/'));
        }
    }
    $slugs = array_values(array_unique($slugs));
    expect($slugs)->not->toBeEmpty();

    $failures = [];
    foreach ($slugs as $slug) {
        foreach (["/admin/{$team->id}/{$slug}", "/admin/{$team->id}/{$slug}/create"] as $path) {
            $response = $this->get($path);
            if ($response->status() >= 500) {
                $failures[] = "{$path} => {$response->status()}";
            }
        }
    }

    expect($failures)->toBe([]);
});

it('loads the /app panel without a fatal error', function () {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();

    $this->actingAs($user);

    foreach (['/app', '/app/account-security', '/app/setup'] as $path) {
        $response = $this->get($path);
        expect($response->status())->toBeLessThan(500, "FAILED: {$path} returned {$response->status()}");
    }
});

it('loads every /app-registered resource for a sales_agent — the developer/agent self-service panel', function () {
    $agent = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $agent->id]);
    $agent->forceFill(['current_team_id' => $team->id])->save();

    setPermissionsTeamId($team->id);
    $agent->assignRole(Role::create(['name' => 'sales_agent', 'guard_name' => 'web', 'team_id' => $team->id]));

    $this->actingAs($agent);

    $router = app('router');
    $slugs = [];
    foreach ($router->getRoutes() as $route) {
        $uri = $route->uri();
        if (str_starts_with($uri, 'app/') && in_array('GET', $route->methods(), true) && ! str_contains($uri, '{record}') && substr_count($uri, '/') === 1) {
            $slugs[] = substr($uri, strlen('app/'));
        }
    }
    $slugs = array_values(array_unique($slugs));
    expect($slugs)->not->toBeEmpty();

    $failures = [];
    foreach ($slugs as $slug) {
        $response = $this->get("/app/{$slug}");
        if ($response->status() >= 500) {
            $failures[] = "/app/{$slug} => {$response->status()}";
        }
    }

    expect($failures)->toBe([]);
});
