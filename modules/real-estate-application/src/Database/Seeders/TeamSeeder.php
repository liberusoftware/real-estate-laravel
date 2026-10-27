<?php

namespace Liberu\RealEstate\Application\Database\Seeders;

use Illuminate\Database\Seeder;
use Liberu\Foundation\Organizations\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // A team requires an owner (user_id). Create a placeholder owner if the
        // users table is empty so the seeder is order-independent.
        $ownerId = (config('auth.providers.users.model'))::query()->min('id')
            ?? (config('auth.providers.users.model'))::factory()->create([
                'name' => 'Owner',
                'email' => 'owner@example.com',
            ])->id;

        Team::firstOrCreate(
            ['name' => 'Default'],
            ['personal_team' => false, 'user_id' => $ownerId],
        );
    }
}
