@extends('layouts.app')

@section('content')
    <center><h1 class="text-5xl text-white">Blog Laravel</h1></center><br>

    @foreach ($blogs as $blog)
        <div>
            <h2 class="text-green-900">{{ $blog->title }}</h2><br>
            <p class="text-white">{!! Str::limit(strip_tags($blog->body), 200) !!}</p><br>
            <a href="{{ route('blogs.show', $blog->id) }}" class="text-blue-900">Read more</a> |

           <form action="{{ route('blogs.destroy', $blog->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-900" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
            </form>
        </div><br>
    @endforeach

@endsection
