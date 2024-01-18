@extends('layouts.app')

@section('content')
    <center><h1>Blog Laravel</h1></center><br>

    @foreach ($blogs as $blog)
        <div>
            <h2 class="text-red-900">{{ $blog->title }}</h2><br>
            <p>{!! Str::limit(strip_tags($blog->body), 200) !!}</p><br>
            <a href="{{ route('blogs.show', $blog->id) }}">Read more</a> |

           <form action="{{ route('blogs.destroy', $blog->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
