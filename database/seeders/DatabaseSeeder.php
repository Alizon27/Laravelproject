<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuperHero; // Asegúrate de importar la clase SuperHero
use Database\Seeders\GenderSeeder;
use Database\Seeders\UniverseSeeder;
use Database\Seeders\SuperheroesSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GenderSeeder::class,
            UniverseSeeder::class,
            SuperheroesSeeder::class, // Referencia al seeder correctamente
        ]);

        // Luego llama a la fábrica si lo necesitas
        SuperHero::factory(100)->create(); // Usar el modelo correcto
    }
}

