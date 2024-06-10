<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bomba>
 */
class BombaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Modelo' => fake()->word(),
            'descripcion'=> fake()->text(),
            'precio' => fake()->numberBetween(50000, 100000),
            'stock' =>fake()->numberBetween(1, 100),

        ];
    }
}
