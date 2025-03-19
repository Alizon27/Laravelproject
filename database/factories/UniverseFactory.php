<?php

namespace Database\Factories;

use App\Models\Universe;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniverseFactory extends Factory
{
    protected $model = Universe::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}


