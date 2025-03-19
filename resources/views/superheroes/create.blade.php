@extends('layouts.app')

@section('content')
<h1>{{ isset($superhero) ? 'Editar Superhéroe' : 'Crear Superhéroe' }}</h1>
<form action="{{ isset($superhero) ? route('superheroes.update', $superhero) : route('superheroes.store') }}" method="POST">
    @csrf
    @if(isset($superhero))
        @method('PUT')
    @endif
    <input type="text" name="name" value="{{ old('name', $superhero->name ?? '') }}" placeholder="Nombre">
    <input type="text" name="power" value="{{ old('power', $superhero->power ?? '') }}" placeholder="Poder">
    <select name="universe_id">
        @foreach($universes as $universe)
            <option value="{{ $universe->id }}" {{ (isset($superhero) && $superhero->universe_id == $universe->id) ? 'selected' : '' }}>
                {{ $universe->name }}
            </option>
        @endforeach
    </select>
    <input type="text" name="gender" value="{{ old('gender', $superhero->gender ?? '') }}" placeholder="Género">
    <button type="submit">Guardar</button>
</form>
@endsection

