<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarInfo;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Car::factory(100)->has(CarInfo::factory()->count(rand(1, 3)))->create();
    }
}
