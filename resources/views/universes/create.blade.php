@extends('layouts.app')

@section('content')
    <h1>Crear Universo</h1>
    <form action="{{ route('universes.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del Universo:</label>
        <input type="text" name="name" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
