@extends('layouts.app')

@section('content')
    <h1>{{ $universe->name }}</h1>
    <a href="{{ route('universes.index') }}">Volver</a>
@endsection
