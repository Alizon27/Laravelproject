<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Asegúrate de importar esto

class SuperHero extends Model
{
    use HasFactory; // Esto habilita el uso de la fábrica en el modelo

    protected $table = "superheroes_t"; // Nombre de la tabla si es diferente a 'super_heroes'
}

