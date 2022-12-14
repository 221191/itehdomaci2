<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RediteljFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imeReditelja' => $this->faker->firstName(),
            'prezimeReditelja' => $this->faker->lastName(),
            'godine' => $this->faker->numberBetween($min = 18, $max = 75)
        ];
    }
}
