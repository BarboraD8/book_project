@extends('layouts/main')

@section('content')
    <h1>Detail of Publisher:</h1>

    <h2>{{ $publisher->title }}</h2>

    <ul>
        @foreach($publisher->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>

@endsection
