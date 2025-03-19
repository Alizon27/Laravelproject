@extends('layouts.app')

@section('content')
<h1>Lista de Superhéroes</h1>
<a href="{{ route('superheroes.create') }}">Crear Nuevo Superhéroe</a>
@foreach($superheroes as $superhero)
    <p>{{ $superhero->name }} - {{ $superhero->power }} - Universo: {{ $superhero->universe->name }}</p>
    <a href="{{ route('superheroes.edit', $superhero) }}">Editar</a>
    <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endforeach
@endsection


