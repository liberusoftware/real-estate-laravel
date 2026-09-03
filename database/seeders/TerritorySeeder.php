<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Core\Models\Territory;

class TerritorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team = Team::firstOrFail();

        foreach ([
            ['code' => 'DUSHANBE', 'name' => 'Dushanbe'],
            ['code' => 'KHUJAND', 'name' => 'Khujand'],
            ['code' => 'BOKHTAR', 'name' => 'Bokhtar'],
            ['code' => 'KULYAB', 'name' => 'Kulyab'],
            ['code' => 'PAMIR', 'name' => 'Pamir / GBAO'],
            ['code' => 'TURSUNZADE', 'name' => 'Tursunzade'],
            ['code' => 'VAHDAT', 'name' => 'Vahdat'],
        ] as $territory) {
            Territory::firstOrCreate(
                ['team_id' => $team->id, 'code' => $territory['code']],
                ['name' => $territory['name']],
            );
        }
    }
}
