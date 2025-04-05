@extends('layouts.main')

@section('title', 'Create Gender')

@section('content')
    <h1>Create Gender</h1>

    <form action="{{ route('gender.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <br><br>

        <button type="submit">Create</button>
    </form>
@endsection