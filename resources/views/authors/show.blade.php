@extends('layouts/main')

@section('content')
    <h3>Detail of author:</h3>

    <h2>{{ $author->name }}</h2>
    <p>biography: {{ $author->bio }}</p>

    <p>list of books:</p>
    <ul>
        @foreach($author->books as $book)
            <li>
                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
