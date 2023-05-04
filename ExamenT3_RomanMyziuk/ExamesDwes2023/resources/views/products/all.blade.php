@extends('layouts.master')
@section('titulo', 'Indice de Productos')
@section('contenido')
    <h1 class="text-center">Página de Productos</h1>
    <a href="{{ route('producto.create') }}">
        <button type="button" class="btn btn-primary">Crear Producto</button>
    </a>
    <div class="card-group">
    @foreach ($productos as $producto)
        <hr>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Precio -> {{ $producto->precio }}</h6>
                    <p class="card-text">{{ $producto->descripcion }}</p>
                    <a href="{{ route('producto.show', $producto) }}">
                        <button type="button" class="btn btn-info">Visualizar Producto</button>
                    </a>
                    <a href="{{ route('producto.edit', $producto) }}">
                        <button type="button" class="btn btn-secondary">Editar Producto</button>
                    </a>
                    <form action="{{ route('producto.destroy', $producto) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </div>
    @endforeach
    </div>
    {{ $productos->links() }}
@endsection
