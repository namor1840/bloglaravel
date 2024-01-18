<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
   <center><h1>{{ $blog->title }}</h1><br></center>

    <p>{!! $blog->body !!}</p>
    <a href="{{ route('blogs.edit', $blog->id) }}">Edit Blog</a>
@endsection
