@extends('plantilla')
@section('titulo', 'Insertar Posts')
@section('contenido')

<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Seleccion el autor del Post</label>
        <select class="form-select" name="usuario_id">
            @forelse ($usuarios as $user )
            <option value="{{$user->id}}">{{$user->email}}</option>
            @empty
            @endforelse
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Titulo</label>
        <input class="form-control" name="titulo">
    </div>
    <div class="mb-3">
        <label class="form-label">Contenido</label>
        <input class="form-control" name="contenido">
    </div>
    <input type="submit" class="btn btn-dark">
</form>

@endsection
