@extends('layouts.main')

@section('title', 'Create Universe')

@section('content')
    <h1>Create Universe</h1>

    <form action="{{ route('universes.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <br><br>

        <button type="submit">Create</button>
    </form>
@endsection