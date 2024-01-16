@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-semibold mb-4">Crear Nuevo Blog</h1>

        <!-- Formulario de creación -->
        <form action="{{ route('blogs.store') }}" method="post" class="max-w-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Título</label>
                <input type="text" name="title" id="title" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-600">Cuerpo</label>
                <textarea name="body" id="body" rows="4" class="form-input mt-1 block w-full"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Guardar Blog</button>
        </form>
    </div>
@endsection
