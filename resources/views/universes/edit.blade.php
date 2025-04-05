@extends('layouts.main')

@section('title', 'Edit Universe')

@section('content')
    <h1>Edit Universe</h1>

    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $universe->name }}" required>

        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection