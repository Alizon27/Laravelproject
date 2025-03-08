<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,
            UniverseSeeder::class, // Asegúrate de agregar esta línea
        ]);
        superheroes::factory(100)->create();
    }
}

