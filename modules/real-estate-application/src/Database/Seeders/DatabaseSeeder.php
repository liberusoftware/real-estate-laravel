<?php

namespace Liberu\RealEstate\Application\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Liberu\RealEstate\Core\Database\Seeders\TerritorySeeder;
use Liberu\RealEstate\Properties\Database\Seeders\PropertySeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TeamSeeder::class,
            TerritorySeeder::class,
            RolesSeeder::class,
            RealEstateRolesSeeder::class,
            SignupRolesSeeder::class,
            UserSeeder::class,
            PropertySeeder::class,
        ]);

    }
}
