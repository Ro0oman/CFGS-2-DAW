@extends('plantilla')
@section('titulo', 'Actualizar posts')
@section('contenido')

<form action="{{ route('post.update', $post->id)}}" method="POST">
@method('PUT')
    @csrf
    <div class="mb-3">
        <label class="form-label">Titulo</label>
        <input class="form-control" name="titulo" value="@isset($post){{$post->titulo}}@endisset">
    </div>
    <div class="mb-3">
        <label class="form-label">Contenido</label>
        <input class="form-control" name="contenido" value="@isset($post){{$post->contenido}}@endisset">
    </div>

    <input type="submit" class="btn btn-dark">
</form>

@endsection
