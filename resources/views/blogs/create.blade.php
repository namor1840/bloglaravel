<!-- resources/views/blogs/create.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
    <h1>Create a New Blog</h1>

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="body">Body:</label>
        <textarea name="body" required></textarea>
        <br>
        <button type="submit">Create Blog</button>
    </form>
@endsection
