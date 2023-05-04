@extends('layouts.master')
@section('titulo', 'Producto')
@section('contenido')
    <div class="container mt-5 text-center">
        <h1>Página del producto <p class="text-primary">{{ $producto->nombre }}</p></h1>
        <hr>
        <h3>Nombre -> {{ $producto->nombre }}</h3>
        <p>
            <h3 class="text-warning">Descripcion</h3>
            <h4>
                {{ $producto->descripcion }}
            </h4>
            <br>
            <h3 class="text-warning">Precio</h3>
            <h4>
                {{ $producto->precio }}
            </h4>
        </p>
    </div>
@endsection
