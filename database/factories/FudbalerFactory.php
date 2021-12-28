<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Klub;

class FudbalerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'jmbg' => $this->faker->unique()->numerify('#############'),
            'brojDres' => $this->faker->numberBetween($min = 0, $max = 40),
            'klub_id' => Klub::factory()
        ];
    }
}
