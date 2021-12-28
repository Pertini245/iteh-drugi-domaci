<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'drzava' => $this->faker->country(),
            'naziv' => $this->faker->city(),
            'skraceniNaziv' => $this->faker->stateAbbr(),
            'postanskiBroj' => $this->faker->unique()->postcode()
        ];
    }
}
