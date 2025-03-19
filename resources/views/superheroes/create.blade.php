@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Superhéroe</h1>
        <form action="{{ route('superheroes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="mb-3">
                <label for="power" class="form-label">Poder:</label>
                <input type="text" class="form-control" id="power" name="power" required>
            </div>

            <div class="mb-3">
                <label for="universe_id" class="form-label">Universo:</label>
                <select class="form-control" id="universe_id" name="universe_id" required>
                    @foreach($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
