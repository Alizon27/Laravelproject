<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Universe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universe>
 */
class UniverseFactory extends Factory
{
    protected $model = Universe::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Genera un nombre aleatorio
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
