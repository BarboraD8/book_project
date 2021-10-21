@extends('layouts/main')

@section('content')
    <h3>Register new book:</h3>

    @if($book->id === null)
        <form action="/books" method="post">
    @else
        <form action="/books/{{ $book->id }}" method="post">
            @method('put')
    @endif


        @csrf

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">
        <br>

        <label for="category_id">Category:</label>
        <select name="category_id">
            <option value="">--please select category--</option>
            @foreach($categories as $category)
                <option
                    value="{{ $category->id }}"
                    {{ old('category_id', isset($book->category) ? $book->category->id : null) == $category->id ? 'selected' : ''}}
                >
                    {{ $category->name }}
                </option>
            @endforeach

        </select>
        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description', $book->description) }}</textarea>
        <br>

        <input type="submit" value="Save"/>
    </form>

@endsection
