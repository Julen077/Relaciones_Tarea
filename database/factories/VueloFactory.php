<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VueloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'horavuelo'=> $this->faker->sentence(),
            'nombrevuelo' => $this->faker->sentence(),
        ];
    }
}
