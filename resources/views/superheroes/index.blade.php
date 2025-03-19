@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Superhéroes</h1>
        <a href="{{ route('superheroes.create') }}" class="btn btn-primary">Agregar Superhéroe</a>
        
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Poder</th>
                    <th>Universo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($superheroes as $superhero)
                    <tr>
                        <td>{{ $superhero->id }}</td>
                        <td>{{ $superhero->name }}</td>
                        <td>{{ $superhero->power }}</td>
                        <td>{{ $superhero->universe->name }}</td>
                        <td>
                            <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bt

