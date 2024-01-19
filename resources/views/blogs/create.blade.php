@php
use Collective\Html\FormFacade as Form;
@endphp


@extends('layouts.app')

@section('content')

<h1 class="text-3xl">Create entry</h1> <br>

    {!! Form::open(['route' => 'blogs.store']) !!}
        <p class="text-white">Title:</p><div class="form-group ">
            {{-- {!! Form::label('title', 'Title:') !!} --}}
            {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
        </div><br>
        <div class="form-group text-white">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['id' => 'editor', 'class' => 'form-control', 'required']) !!}
        </div><br>
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    <script src="https://cdn.tiny.cloud/1/eopet1geutqz32hb4zle4f1ron2bwkdoyav2bt5177iko2pb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#editor',
            menubar: false,
            content_style: 'body { background-color: transparent; }',
            plugins: 'autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>
@endsection
