<?php

namespace Database\Factories;
use App\Models\Reditelj;
use Illuminate\Database\Eloquent\Factories\Factory;

class PredstavaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sifraPredstave' => $this->faker->randomDigitNotNull(),
            'imePredstave' =>$this->faker->word(),
            'reditelj_id' => Reditelj::factory()
        ];
    }
}
