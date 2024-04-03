<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budjet>
 */
class BudjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idB' => fake()->unique()->randomNumber(),
            'typeBudjet' => fake()->name(),
            'montant' => fake()->randomNumber(),
            'dateBudjet' => fake()->date(),
            'année' => fake()->year(),
        ];
    }
}
