@extends('layouts.main')

@section('title', 'SuperHeroes')

@section('content')
    <h1>SuperHeroes</h1>
    <a href="{{ route('superheroes.create') }}">Create SuperHero</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Gender</th>
                <th>Real Name</th>
                <th>Name</th>
                <th>Universe</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->gender->name ?? 'N/A' }}</td>
                    <td>{{ $item->real_name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->universe->name ?? 'N/A' }}</td>
                    <td>
                        @if(filter_var($item->picture, FILTER_VALIDATE_URL))
                            <img src="{{ $item->picture }}" alt="{{ $item->name }}" width="100">
                        @else
                            {{ $item->picture }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('superheroes.show', $item->id) }}">Show</a>
                        <a href="{{ route('superheroes.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('superheroes.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this superhero?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection