<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    public function run(): void
    {
        Universe::factory(10)->create(); // Genera 10 universos aleatorios
    }
}