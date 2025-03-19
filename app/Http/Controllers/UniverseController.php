<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index', compact('universes'));
    }

    public function create()
    {
        return view('universes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Universe::create($request->all());
        return redirect()->route('universes.index')->with('success', 'Universo creado correctamente.');
    }

    public function show(Universe $universe)
    {
        return view('universes.show', compact('universe'));
    }

    public function edit(Universe $universe)
    {
        return view('universes.create', compact('universe'));
    }

    public function update(Request $request, Universe $universe)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $universe->update($request->all());
        return redirect()->route('universes.index')->with('success', 'Universo actualizado correctamente.');
    }

    public function destroy(Universe $universe)
    {
        $universe->delete();
        return redirect()->route('universes.index')->with('success', 'Universo eliminado correctamente.');
    }
}

