@extends('layouts.app')

@section('content')
    <h1 class="text-5xl text-white text-center">Blog Laravel</h1><br>

    @foreach ($blogs as $blog)
        <div>
            <li class="mb-4">
                <h2 class="text-2xl font-semibold text-white">{{ $blog->title }}</h2>
                <p class="text-gray-300">{{ Str::limit(strip_tags($blog->body), 200) }}</p>
                <a href="{{ route('blogs.show', $blog->id) }}" class="text-blue-400 hover:underline">Read more</a>
            </li>
           <form action="{{ route('blogs.destroy', $blog->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit"  onclick="return confirm('Are you sure you want to delete this entry?')">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 18 20">
                        <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                      </svg>
                </button>
            </form>
        </div><hr><br>
    @endforeach
        {{ $blogs->links() }}

@endsection
