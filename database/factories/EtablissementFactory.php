<?php

namespace Database\Factories;

use App\Models\Etablissement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtablissementFactory extends Factory
{
    // protected $model = Etablissement::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'Code' => fake()->unique()->randomNumber(),
            'NomFr' => fake()->text(),
            'NomAr' => fake()->text(),
            // 'remember_token' => Str::random(10),
        ];
    }
}
