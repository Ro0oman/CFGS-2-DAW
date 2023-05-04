@extends('plantilla')
@section('titulo', 'Insertar Comentario')
@section('contenido')

<form action="{{ route('comentario.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Contenido</label>
        <input class="form-control" name="contenido">
    </div>
    <div class="mb-3">
        <select class="form-select" name="usuario_id">
            @forelse ($usuarios as $user )
            <option value="{{$user->id}}">{{$user->email}}</option>
            @empty
            @endforelse
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="post_id">
            @forelse ($posts as $post )
            <option value="{{$post->id}}">{{$post->titulo}}</option>
            @empty
            @endforelse
        </select>
    </div>
    <input type="submit" class="btn btn-dark">
</form>

@endsection
