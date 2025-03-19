<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;
use App\Models\Superhero;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Universe::factory(5)->create()->each(function ($universe) {
            Superhero::factory(3)->create(['universe_id' => $universe->id]);
        });
    }
}


