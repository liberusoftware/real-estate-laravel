<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Liberu\Foundation\Organizations\Models\Team;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RealEstateRolesSeeder extends Seeder
{
    /**
     * host/sales_agent are the self-service roles for a developer/agency's
     * own staff to manage their own listings through the /app panel —
     * PropertyResource's table already scopes every query to the acting
     * user's current team (forTeam($teamId)), so granting these doesn't
     * expose other teams' properties. Deliberately excludes the
     * housekeeping half of PropertyPolicy (DeleteAny, ForceDelete(Any),
     * Restore(Any), Reorder) — those stay super_admin-only.
     */
    private const PROPERTY_PERMISSIONS = [
        'ViewAny:Property',
        'View:Property',
        'Create:Property',
        'Update:Property',
        'Delete:Property',
        'Replicate:Property',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles are team-scoped (permission.teams=true). Create + query them
        // inside the default team's context. See CLAUDE.md tenancy rules.
        $team = null;

        if (Utils::isTenancyEnabled()) {
            $team = Team::firstOrFail();
            setPermissionsTeamId($team->id);
        }

        $permissions = Permission::whereIn('name', self::PROPERTY_PERMISSIONS)->get();

        foreach (['host', 'sales_agent'] as $roleName) {
            $role = Role::firstOrCreate(array_filter([
                'name' => $roleName,
                'guard_name' => 'web',
                'team_id' => $team?->id,
            ]));

            $role->syncPermissions($permissions);
        }
    }
}
