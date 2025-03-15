<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
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
            'name' => 'required',
            'alias' => 'required',
            'power' => 'required',
            'universe_id' => 'required|exists:universes,id',
        ]);

        Superhero::create($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe creado con éxito');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }
}

