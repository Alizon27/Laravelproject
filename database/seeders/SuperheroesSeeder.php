<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superhero;  // Asegúrate de importar el modelo correcto

class SuperheroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Superhero::factory(100)->create(); // Esto generará 100 registros de superhéroes
    }
}
