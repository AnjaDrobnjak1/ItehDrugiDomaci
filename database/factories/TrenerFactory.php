<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Drzava;
use App\Models\Teniser;

class TrenerFactory extends Factory
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
            'drzava_id' => Drzava::factory(),
            'teniser_id' => Teniser::factory(),
        ];
    }
}
