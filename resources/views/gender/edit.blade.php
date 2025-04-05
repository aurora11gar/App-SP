@extends('layouts.main')

@section('title', 'Edit Gender')

@section('content')
    <h1>Edit Gender</h1>

    <form action="{{ route('gender.update', $gender->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $gender->name }}" required>

        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection