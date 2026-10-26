<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Liberu\Foundation\Organizations\Models\Team;
use Spatie\Permission\Models\Role;

/**
 * These are pure classification roles for a self-registered visitor's /app
 * dashboard (User::dashboardRole() / RoleStatsWidget already branch on
 * these names) — unlike host/sales_agent (RealEstateRolesSeeder), none of
 * these carry any permissions. A landlord or seller who actually needs to
 * create/manage properties still needs host or sales_agent granted by a
 * team owner; this only decides which dashboard cards they see and how
 * their signup intent is classified.
 */
class SignupRolesSeeder extends Seeder
{
    public function run(): void
    {
        $team = null;

        if (Utils::isTenancyEnabled()) {
            $team = Team::firstOrFail();
            setPermissionsTeamId($team->id);
        }

        foreach (['landlord', 'seller', 'tenant', 'buyer', 'contractor'] as $roleName) {
            Role::firstOrCreate(array_filter([
                'name' => $roleName,
                'guard_name' => 'web',
                'team_id' => $team?->id,
            ]));
        }
    }
}
