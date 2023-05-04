@extends('plantilla')
@section('titulo', 'Insertar libros')
@section('contenido')

@isset($libro)
<form action="{{ route('libros.update', $libro->id)}}" method="POST">
@method('PUT')
@else
<form action="{{ route('libros.store') }}" method="POST">
@endif
    @csrf
    <div class="mb-3">
        <label class="form-label">Titulo</label>
        <input class="form-control" name="titulo" value="@isset($libro){{$libro->titulo}}@endisset">
    </div>
    <div class="mb-3">
        <label class="form-label">Editorial</label>
        <input class="form-control" name="editorial" value="@isset($libro){{$libro->editorial}}@endisset">
    </div>
    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input class="form-control" name="precio" value="@isset($libro){{$libro->precio}}@endisset">
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" name="id" value="@isset($libro){{$libro->id}}@endisset">
    </div>

    <input type="submit" class="btn btn-dark">
</form>

@endsection
