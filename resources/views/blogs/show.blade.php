<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
   <center><h1 class="text-white">{{ $blog->title }}</h1><br></center>

   <p class="text-white">{!! $blog->body !!}</p>

    <a href="{{ route('blogs.edit', $blog->id) }}" class="text-white">Edit Blog</a>
@endsection
