<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarInfoFactory extends Factory
{
    // ...

    public function definition()
    {
        return [
            'reg_number' => $this->faker->word,
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'owner_id' => Car::factory(),
        ];
    }
}
