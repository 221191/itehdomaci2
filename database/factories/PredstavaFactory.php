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
            'sifraPredstave' => $this->faker->numberBetween($min = 1, $max = 1000),
            'imePredstave' =>$this->faker->word(),
            'reditelj_id' =>Reditelj::factory()
        ];
    }
}
