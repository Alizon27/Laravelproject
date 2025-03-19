@extends('layouts.app')

@section('content')
    <h1>Lista de Universos</h1>
    <a href="{{ route('universes.create') }}">Crear Universo</a>
    <ul>
        @foreach ($universes as $universe)
            <li>
                <a href="{{ route('universes.show', $universe->id) }}">{{ $universe->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
