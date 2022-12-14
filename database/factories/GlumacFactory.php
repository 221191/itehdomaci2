<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GlumacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imeGlumca' => $this->faker->firstName(),
            'prezimeGlumca' => $this->faker->lastName(),
            'opisUloge' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
