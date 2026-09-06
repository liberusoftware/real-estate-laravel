<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Core\Models\Territory;
use Liberu\RealEstate\Properties\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Seed a representative catalog so the public API / frontend have real
     * data to verify against, instead of an empty table.
     *
     * Weighted toward the business priority: buy/rent city housing (flat,
     * house, land, cottage, commercial) first — tourism (guesthouse,
     * hostel, hunting-lodge, nightly deal_type=rent) is a minority.
     * mountain_view/altitude/max_guests are only set on the mountain-region
     * tourism listings (guesthouse, hunting-lodge) — Khujand's hostel is a
     * lowland city property, so it gets none of those.
     */
    public function run(): void
    {
        $team = Team::firstOrFail();
        $admin = $team->users()->first();

        foreach ([
            [
                'territory' => 'DUSHANBE',
                'title' => '[TEST] Просторная квартира в центре Душанбе',
                'address' => 'проспект Рудаки, 45',
                'description' => 'Светлая трёхкомнатная квартира с ремонтом, рядом парк Рудаки и деловой центр. Тёплые полы, новая проводка.',
                'price' => 850000,
                'bedrooms' => 3,
                'area_sqft' => 78,
                'property_type' => 'apartment',
                'deal_type' => 'sale',
                'latitude' => 38.5605,
                'longitude' => 68.7891,
            ],
            [
                'territory' => 'DUSHANBE',
                'title' => '[TEST] Уютная 2-комнатная квартира в аренду',
                'address' => 'улица Бухоро, 21',
                'description' => 'Сдаётся длительно, помесячная оплата. Вся мебель и техника включены, рядом школа и поликлиника.',
                'price' => 6500,
                'bedrooms' => 2,
                'area_sqft' => 54,
                'property_type' => 'apartment',
                'deal_type' => 'rent',
                'latitude' => 38.5651,
                'longitude' => 68.774,
            ],
            [
                'territory' => 'KULYAB',
                'title' => '[TEST] Дом с садом в Кулябе',
                'address' => 'улица Исмоили Сомони, 8',
                'description' => 'Семейный дом с фруктовым садом и отдельным гостевым флигелем, документы готовы к сделке.',
                'price' => 940000,
                'bedrooms' => 5,
                'area_sqft' => 160,
                'property_type' => 'house',
                'deal_type' => 'sale',
                'latitude' => 37.9131,
                'longitude' => 69.7845,
            ],
            [
                'territory' => 'TURSUNZADE',
                'title' => '[TEST] Участок под строительство',
                'address' => 'джамоат Навбунёд',
                'description' => 'Ровный участок с подведённым электричеством, документы готовы, рядом асфальтированная дорога.',
                'price' => 320000,
                'bedrooms' => null,
                'area_sqft' => 600,
                'property_type' => 'land',
                'deal_type' => 'sale',
                'latitude' => 38.5109,
                'longitude' => 68.2417,
            ],
            [
                'territory' => 'VAHDAT',
                'title' => '[TEST] Загородный коттедж у водохранилища',
                'address' => 'посёлок Ромит',
                'description' => 'Двухэтажный коттедж с садом, баней и собственным источником воды — готов к продаже.',
                'price' => 1200000,
                'bedrooms' => 6,
                'area_sqft' => 210,
                'property_type' => 'cottage',
                'deal_type' => 'sale',
                'latitude' => 38.6102,
                'longitude' => 69.1873,
            ],
            [
                'territory' => 'BOKHTAR',
                'title' => '[TEST] Коммерческое помещение в аренду',
                'address' => 'центральный рынок, ряд 3',
                'description' => 'Торговая точка с отдельным входом и складским помещением, сдаётся помесячно.',
                'price' => 8500,
                'bedrooms' => null,
                'area_sqft' => 65,
                'property_type' => 'commercial',
                'deal_type' => 'rent',
                'latitude' => 37.8351,
                'longitude' => 68.7801,
            ],
            [
                'territory' => 'PAMIR',
                'title' => '[TEST] Гостевой дом с видом на Памир',
                'address' => 'село Хорог, Ишкашимский тракт',
                'description' => 'Традиционный памирский дом для туристов и треккеров, панорама на хребет. Посуточная аренда.',
                'price' => 250,
                'bedrooms' => 5,
                'area_sqft' => 120,
                'property_type' => 'guesthouse',
                'deal_type' => 'rent',
                'latitude' => 37.4922,
                'longitude' => 71.5548,
                'mountain_view' => 'pamir',
                'altitude' => 2200,
                'max_guests' => 10,
            ],
            [
                'territory' => 'KHUJAND',
                'title' => '[TEST] Хостел для путешественников',
                'address' => 'улица Ленина, 12',
                'description' => 'Бюджетное размещение рядом с базаром Панчшанбе, общая кухня и терраса. Посуточная аренда.',
                'price' => 90,
                'bedrooms' => 8,
                'area_sqft' => 200,
                'property_type' => 'hostel',
                'deal_type' => 'rent',
                'latitude' => 40.2847,
                'longitude' => 69.6301,
            ],
            [
                'territory' => 'PAMIR',
                'title' => '[TEST] Домик для охоты и отдыха в горах',
                'address' => 'Фанские горы, озеро Искандеркуль',
                'description' => 'Охотничий домик в горной зоне — своя генераторная электростанция, родник рядом. Посуточная аренда.',
                'price' => 900,
                'bedrooms' => 3,
                'area_sqft' => 70,
                'property_type' => 'hunting-lodge',
                'deal_type' => 'rent',
                'latitude' => 39.0778,
                'longitude' => 68.3667,
                'has_generator' => true,
                'mountain_view' => 'fan',
                'altitude' => 2300,
                'water_source' => 'spring',
                'max_guests' => 6,
            ],
        ] as $data) {
            $territory = Territory::query()->forTeam($team->id)->where('code', $data['territory'])->first();

            Property::query()->firstOrCreate(
                ['team_id' => $team->id, 'title' => $data['title']],
                [
                    'territory_id' => $territory?->id,
                    'created_by' => $admin?->id,
                    'address' => $data['address'],
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'currency' => 'TJS',
                    'bedrooms' => $data['bedrooms'],
                    'area_sqft' => $data['area_sqft'],
                    'property_type' => $data['property_type'],
                    'deal_type' => $data['deal_type'],
                    'latitude' => $data['latitude'],
                    'longitude' => $data['longitude'],
                    'status' => 'available',
                    'published_at' => now(),
                    'has_generator' => $data['has_generator'] ?? false,
                    'mountain_view' => $data['mountain_view'] ?? null,
                    'altitude' => $data['altitude'] ?? null,
                    'water_source' => $data['water_source'] ?? null,
                    'max_guests' => $data['max_guests'] ?? null,
                ],
            );
        }
    }
}
