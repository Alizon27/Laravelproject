@extends('layouts.app')

@section('content')
    <h1>Superheroes</h1>
    <a href="{{ route('superheroes.create') }}">Create Superhero</a>
    <ul>
        @foreach ($superheroes as $superhero)
            <li><a href="{{ route('superheroes.show', $superhero) }}">{{ $superhero->name }}</a></li>
        @endforeach
    </ul>
@endsection
