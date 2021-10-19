@extends('layouts/main')

@section('content')
    <h3>Register new book:</h3>

    <form action="/books" method="post">
        @csrf

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required/>
        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>

        <input type="submit" value="Save"/>
    </form>

@endsection
