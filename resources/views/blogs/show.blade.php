<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
   <h1 class="text-white text-4xl text-center">{{ $blog->title }}</h1><br>

   <div class="text-white">
    {!! $blog->body !!}
</div><br>

    <a href="{{ route('blogs.edit', $blog->id) }}"><?xml version="1.0" ?><svg class="feather feather-edit" fill="white" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></a>
@endsection
