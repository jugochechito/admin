@extends('adminlte::page')

@section('title', 'Noticias')

@section('content_header')
    <h1>pruebaghghgh
    </h1>
@stop

@section('content')
    <p>Lista de noticias</p>
    <a href="{{ route('noticias.create') }}" class="btn btn-primary">Agregar noticia</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $newsItem)
                <tr>
                    <td>{{ $newsItem->title }}</td>
                    <td>
                        <a href="{{ route('noticias.edit', $newsItem) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('noticias.destroy', $newsItem) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
