<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budjet>
 */
class FonctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idF' => fake()->unique()->randomNumber(),
            'libelleFr' => fake()->name(),
            'libelleAr' => fake()->name(),
        ];
    }
}
