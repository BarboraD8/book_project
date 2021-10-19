@extends('layouts/main')

@section('content')
    <h3>Register new author:</h3>

    <form action="/authors" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required/>
        <br>

        <label for="bio">Biography:</label>
        <textarea id="bio" name="bio"></textarea>
        <br>

        <input type="submit" value="Save"/>
    </form>

@endsection
