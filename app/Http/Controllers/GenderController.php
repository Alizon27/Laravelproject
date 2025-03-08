<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /**
     * Muestra una lista de todos los géneros.
     */
    public function index()
    {
        $genders = Gender::all();
        return view('gender', compact('gender'));
    }

    /**
     * Guarda un nuevo género en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:genders,name',
        ]);

        $gender = Gender::create($request->all());
        return response()->json($gender, 201);
    }

    /**
     * Muestra un género específico.
     */
    public function show(Gender $gender)
    {
        return response()->json($gender);
    }

    /**
     * Actualiza un género existente.
     */
    public function update(Request $request, Gender $gender)
    {
        $request->validate([
            'name' => 'required|string|unique:genders,name,' . $gender->id,
        ]);

        $gender->update($request->all());
        return response()->json($gender);
    }

    /**
     * Elimina un género de la base de datos.
     */
    public function destroy(Gender $gender)
    {
        $gender->delete();
        return response()->json(['message' => 'Género eliminado correctamente']);
    }
}

