<!-- En resources/views/blogs/search.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8 text-white">
        <h1 class="text-4xl font-bold mb-4">Search Results</h1>
        <hr><br>

        @if(count($blogs) > 0)
            <ul class="list-disc pl-4">
                @foreach($blogs as $blog)
                    <li class="mb-4">
                        <h2 class="text-2xl font-semibold">{{ $blog->title }}</h2>
                        <p class="text-gray-300">{{ Str::limit(strip_tags($blog->body), 200) }}</p>
                        <a href="{{ route('blogs.show', $blog->id) }}" class="text-blue-400 hover:underline">Read more</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-lg text-gray-300">No results found for "{{ $query }}".</p>
        @endif
    </div>
@endsection
