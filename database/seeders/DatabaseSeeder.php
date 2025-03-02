<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Alex',
            'password' => Hash::make('123123'),
            'email' => 'alex@test.ru'
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\City::factory(1)->create([
            'user_id' => 1,
            'title' => 'Остров Alex-a',
            'coord_x' => 1,
            'coord_y' => 1
        ]);

        $this->call(BuildingDictionarySeeder::class);

        Building::create([
            'city_id' => 1,
            'building_id' => 1,
            'lvl' => 3
        ]);

        Building::create([
            'city_id' => 1,
            'building_id' => 2,
            'lvl' => 1
        ]);

        Building::create([
            'city_id' => 1,
            'building_id' => 3,
            'lvl' => 2
        ]);
    }
}
