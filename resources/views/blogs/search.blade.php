<!-- En resources/views/blogs/search.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>

    @if(count($blogs) > 0)
        <ul>
            @foreach($blogs as $blog)
                <li>
                    <h2 class="text-white">{{ $blog->title }}</h2>
                    <p class="text-white">{{ Str::limit(strip_tags($blog->body), 200) }}</p>
                    <a href="{{ route('blogs.show', $blog->id) }}" class="text-green-900">Read more</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No results found for "{{ $query }}".</p>
    @endif
@endsection
