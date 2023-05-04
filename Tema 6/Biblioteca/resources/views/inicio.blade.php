@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <h1>Página de inicio</h1>
    <p>
        <a href="{{ route('listado_libros') }}">Listado de libros</a>
    </p>
@endsection
