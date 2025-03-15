<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController; // Importa el controlador
use App\Http\Controllers\UniverseController; // Importa el controlador UniverseController
use App\Http\Controllers\SuperheroController; // Importa el controlador SuperheroController

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas para GenderController
Route::resource('genders', GenderController::class);

// Rutas para UniverseController
Route::resource('universes', UniverseController::class);

// Rutas para SuperheroController
Route::resource('superheroes', SuperheroController::class);

