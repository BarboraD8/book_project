@extends('layouts/main')

@section('content')
    <h3>list of Publishers:</h3>
    <ul>
        @foreach ($publishers as $publisher)
            <li>
                <a href="/publishers/{{ $publisher->id }}">{{ $publisher->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
