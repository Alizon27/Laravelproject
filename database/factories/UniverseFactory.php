<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Universe; // Asegúrate de importar el modelo

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universe>
 */
class UniverseFactory extends Factory
{
    protected $model = Universe::class; // Asocia la fábrica con el modelo Universe

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Genera un nombre ficticio para el universo
        ];
    }
}

