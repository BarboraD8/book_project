@extends('layouts/main')

@section('content')
    <h3>Detail of book:</h3>

    <h2>{{ $book->title }}</h2>
    <p>published at: {{ $book->publishedAt }}</p>
    <p>description: {{ $book->description }}</p>
@endsection
