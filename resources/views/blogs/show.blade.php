<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.app') <!-- Ajusta según tu estructura de diseño -->

@section('content')
   <h1 class="text-4xl text-center text-white">{{ $blog->title }}</h1><br>

   <div class="text-white">
    {!! $blog->body !!}
</div><br>

    <a href="{{ route('blogs.edit', $blog->id) }}"><?xml version="1.0" ?><svg class="feather feather-edit" fill="white" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></a>

<br>        <div class="mt-4">
    <!-- Enlace para Me gusta -->
    <form action="{{ route('blogs.like', $blog->id) }}" method="POST" class="inline-block">
        @csrf
        <button type="submit" class="text-blue-400">
            <i class="fa fa-thumbs-up"></i> Me gusta
            <span class="text-blue-400 ml-2">{{ $blog->likes()->count() }}</span> <!-- Color azul para la cantidad de Me gusta -->
        </button>
    </form>

    <!-- Enlace para No me gusta -->
    <form action="{{ route('blogs.dislike', $blog->id) }}" method="POST" class="inline-block ml-4">
        @csrf
        <button type="submit" class="text-red-400">
            <i class="fa fa-thumbs-down"></i> No me gusta
            <span class="text-red-400 ml-2">{{ $blog->dislikes()->count() }}</span> <!-- Color rojo para la cantidad de No me gusta -->
        </button>
    </form>
</div>
><hr>
    <div>
        <h2 class="text-white">Comments</h2>

        @forelse ($blog->comments as $comment)
            <div class="p-3 mb-3 border border-gray-300">
                <p class="text-gray-700">{{ $comment->body }}</p>
                <small class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</small>
            </div>
        @empty
            <p class="text-white">No comments yet.</p>
        @endforelse


        <form action="{{ route('comments.store', $blog->id) }}" method="post" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="body" class="block text-sm font-medium text-gray-400">Add a Comment:</label>
                <textarea name="body" id="body" rows="3" class="form-input block w-full mt-1 rounded-md shadow-sm"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 text-black bg-green-400 rounded-md">Post Comment</button>
        </form>
    </div>

@endsection
