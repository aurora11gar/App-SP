@extends('layouts.main')
@section('title', 'Show Gender')

@section('content')
    <h1>Gender Detail</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $gender->id }}</td>
                <td>{{ $gender->name }}</td>
            </tr>
        </tbody>
    </table>

    <br>

    <a href="{{ route('gender.index') }}">Back to List</a>
@endsection