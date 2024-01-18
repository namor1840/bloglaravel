<!-- resources/views/blogs/index.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
    <center><h1 class="">Blog Laravel</h1></center><br>

    @foreach($blogs as $blog)
        <div>
            <h2 class="text-red-900">{{ $blog->title }}</h2>
            <p>{!! Str::limit(strip_tags($blog->body), 200) !!}</p><br>

            <a href="{{ route('blogs.show', $blog->id) }}">Open entry</a>
        </div><br>
    @endforeach
@endsection
