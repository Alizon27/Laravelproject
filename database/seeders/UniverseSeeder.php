<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('universes')->insert([
            ['name' => 'Marvel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'DC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
