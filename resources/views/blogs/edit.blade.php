@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Editar Blog</h1>

        <!-- Formulario de edición -->
        <form action="{{ route('blogs.update', $blog->id) }}" method="post" class="max-w-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Título</label>
                <input type="text" name="title" id="title" value="{{ $blog->title }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-600">Cuerpo</label>
                <textarea name="body" id="body" rows="4" class="form-input mt-1 block w-full">{{ $blog->body }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Blog</button>
        </form>
    </div>
@endsection
