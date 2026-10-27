<?php

namespace Liberu\RealEstate\Application\Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\RolesPermissions\Models\Permission;
use Liberu\Foundation\RolesPermissions\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles are team-scoped (permission.teams=true). Create + query them
        // inside the default team's context. See CLAUDE.md tenancy rules.
        $teamId = null;

        if (Utils::isTenancyEnabled()) {
            $team = Team::firstOrFail();
            $teamId = $team->id;
            setPermissionsTeamId($teamId);
        }

        $permissions = Permission::where('guard_name', 'web')->pluck('id')->all();

        foreach (['buyer', 'seller', 'landlord', 'tenant', 'contractor', 'staff', 'admin', 'super_admin'] as $name) {
            $role = Role::firstOrCreate([
                'name' => $name,
                'guard_name' => 'web',
                ...($teamId === null ? [] : ['team_id' => $teamId]),
            ]);

            // Admin-facing roles need to see generated Filament resources. The
            // domain roles stay intentionally permission-light and use the app panel.
            if (in_array($name, ['staff', 'admin', 'super_admin'], true)) {
                $role->syncPermissions($permissions);
            }
        }
    }
}
