@extends('layouts.main')

@section('title', 'Gender Details')

@section('content')
    <h1>Gender Details</h1>

    <p><strong>ID:</strong> {{ $gender->id }}</p>
    <p><strong>Name:</strong> {{ $gender->name }}</p>

    <a href="{{ route('gender.index') }}">Back to List</a>
@endsection