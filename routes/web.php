<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController; // Importa el controlador

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas para GenderController
Route::resource('genders', GenderController::class,'index' );
