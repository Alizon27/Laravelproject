<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTTable extends Migration
{
    public function up()
    {
        Schema::create('superheroes_t', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('power');
            $table->foreignId('universe_id')->constrained(); // Si tienes una relación con 'universes'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('superheroes_t');
    }
}

