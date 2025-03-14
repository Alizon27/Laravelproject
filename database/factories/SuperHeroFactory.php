<?php

namespace Database\Factories;

use App\Models\Superhero;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuperheroFactory extends Factory
{
    protected $model = Superhero::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'power' => $this->faker->word(),
            'universe_id' => \App\Models\Universe::factory(),  // Si tienes una relación con Universe
        ];
    }
}

