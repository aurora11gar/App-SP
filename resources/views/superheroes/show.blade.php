@extends('layouts.main')

@section('title', 'SuperHero Details')

@section('content')
    <h1>SuperHero Details</h1>

    <p><strong>ID:</strong> {{ $superhero->id }}</p>
    <p><strong>Name:</strong> {{ $superhero->name }}</p>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Gender:</strong> {{ $superhero->gender->name ?? 'N/A' }}</p>
    <p><strong>Universe:</strong> {{ $superhero->universe->name ?? 'N/A' }}</p>
    <p><strong>Picture:</strong></p>
    @if(filter_var($superhero->picture, FILTER_VALIDATE_URL))
        <img src="{{ $superhero->picture }}" alt="{{ $superhero->name }}" width="200">
    @else
        {{ $superhero->picture }}
    @endif

    <a href="{{ route('superheroes.index') }}">Back to List</a>
@endsection