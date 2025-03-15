@extends('layouts.app')

@section('content')
    <h1>Universes</h1>
    <a href="{{ route('universes.create') }}">Create Universe</a>
    <ul>
        @foreach ($universes as $universe)
            <li><a href="{{ route('universes.show', $universe) }}">{{ $universe->name }}</a></li>
        @endforeach
    </ul>
@endsection
