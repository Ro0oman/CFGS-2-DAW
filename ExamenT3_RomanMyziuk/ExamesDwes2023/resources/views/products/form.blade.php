@extends('layouts.master')
@section('titulo', 'Insertar Producto')
@section('contenido')

@isset($producto)
<h2>Actualizacion de {{$producto->nombre}} </h2>
<form action="{{ route('producto.update', $producto->id)}}" method="POST">
    @method('PUT')
@else
<form action="{{ route('producto.store') }}" method="POST">
@endif
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input class="form-control" name="nombre" value="@isset($producto){{$producto->nombre}}@endisset">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input class="form-control" name="descripcion" value="@isset($producto){{$producto->descripcion}}@endisset">
    </div>
    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input class="form-control" name="precio" value="@isset($producto){{$producto->precio}}@endisset">
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" name="id" value="@isset($producto){{$producto->id}}@endisset">
    </div>

    <input type="submit" class="btn btn-dark">
</form>

@endsection
