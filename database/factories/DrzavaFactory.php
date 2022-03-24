<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DrzavaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->country(),
            'glavni_grad' => $this->faker->city(),
            'broj_stanovnika' => $this->faker->numberBetween($min = 25000, $max = 2500000),
        ];
    }
}
