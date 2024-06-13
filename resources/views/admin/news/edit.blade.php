@extends('adminlte::page')

@section('title', 'Editar Noticia')

@section('content_header')
    <h1>Editar Noticia</h1>
@stop

@section('content')
    <form action="{{ route('noticias.update', $noticia) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" value="{{ $noticia->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $noticia->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
