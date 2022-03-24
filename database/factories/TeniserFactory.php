<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeniserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name(),
            'pozicija' => $this->faker->numberBetween($min = 1, $max = 300),
            'broj_titula' => $this->faker->numberBetween($min = 0, $max = 250),
        ];
    }
}
