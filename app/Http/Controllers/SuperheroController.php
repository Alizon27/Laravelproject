<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperHero;
use App\Models\Universe;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = SuperHero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        $universes = Universe::all();
        return view('superheroes.create', compact('universes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'power' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id',
            'gender' => 'required|string'
        ]);

        SuperHero::create($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe creado correctamente.');
    }

    public function show(SuperHero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(SuperHero $superhero)
    {
        $universes = Universe::all();
        return view('superheroes.create', compact('superhero', 'universes'));
    }

    public function update(Request $request, SuperHero $superhero)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'power' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id',
            'gender' => 'required|string'
        ]);

        $superhero->update($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado correctamente.');
    }

    public function destroy(SuperHero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado correctamente.');
    }
}



