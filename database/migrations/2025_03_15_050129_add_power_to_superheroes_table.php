<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPowerToSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('superheroes', function (Blueprint $table) {
            $table->string('power'); // Agregar la columna power
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('superheroes', function (Blueprint $table) {
            $table->dropColumn('power'); // Eliminar la columna power
        });
    }
}
