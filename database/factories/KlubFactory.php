<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grad;

class KlubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazivKluba' => $this->faker->company(),
            'godinaOsnivanja' => $this->faker->numberBetween($min = 1885, $max = date("Y")),
            'brojTitula' => $this->faker->numberBetween($min = 0, $max = 40),
            'grad_id' => Grad::factory(),
        ];
    }
}
