@extends('layouts.main')

@section('title', 'Create SuperHero')

@section('content')
    <h1>Create SuperHero</h1>

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" required>

        <label for="gender_id">Gender:</label>
        <select name="gender_id" id="gender_id" required>
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>

        <label for="universe_id">Universe:</label>
        <select name="universe_id" id="universe_id" required>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select>

        <label for="picture">Picture URL:</label>
        <input type="text" name="picture" id="picture">

        <br><br>

        <button type="submit">Create</button>
    </form>
@endsection