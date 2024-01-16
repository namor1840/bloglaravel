<!-- resources/views/blogs/edit.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
    <h1>Edit Blog</h1>

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $blog->title }}" required>
        <br>
        <label for="body">Body:</label>
        <textarea name="body" required>{{ $blog->body }}</textarea>
        <br>
        <button type="submit">Update Blog</button>
    </form>
@endsection
