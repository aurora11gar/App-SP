@extends('layouts.main')

@section('title', 'Edit SuperHero')

@section('content')
    <h1>Edit SuperHero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $superhero->name }}" required>

        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" value="{{ $superhero->real_name }}" required>

        <label for="gender_id">Gender:</label>
        <select name="gender_id" id="gender_id" required>
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}" {{ $superhero->gender_id == $gender->id ? 'selected' : '' }}>
                    {{ $gender->name }}
                </option>
            @endforeach
        </select>

        <label for="universe_id">Universe:</label>
        <select name="universe_id" id="universe_id" required>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>
                    {{ $universe->name }}
                </option>
            @endforeach
        </select>

        <label for="picture">Picture URL:</label>
        <input type="text" name="picture" id="picture" value="{{ $superhero->picture }}">

        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection