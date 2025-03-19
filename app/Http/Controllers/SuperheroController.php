<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Universe;

class SuperheroController extends Controller
{
    /**
     * Muestra una lista de los superhéroes.
     */
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Muestra el formulario para crear un nuevo superhéroe.
     */
    public function create()
    {
        $universes = Universe::all();
        return view('superheroes.create', compact('universes'));
    }

    /**
     * Guarda un nuevo superhéroe en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'power' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id',
        ]);

        Superhero::create([
            'name' => $request->name,
            'power' => $request->power,
            'universe_id' => $request->universe_id,
        ]);

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe creado exitosamente.');
    }

    /**
     * Muestra un superhéroe en particular.
     */
    public function show($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Muestra el formulario para editar un superhéroe.
     */
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);
        $universes = Universe::all();
        return view('superheroes.edit', compact('superhero', 'universes'));
    }

    /**
     * Actualiza la información del superhéroe.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'power' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id',
        ]);

        $superhero = Superhero::findOrFail($id);
        $superhero->update([
            'name' => $request->name,
            'power' => $request->power,
            'universe_id' => $request->universe_id,
        ]);

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado correctamente.');
    }

    /**
     * Elimina un superhéroe de la base de datos.
     */
    public function destroy($id)
    {
        $superhero = Superhero::findOrFail($id);
        $superhero->delete();

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado correctamente.');
    }
}


