@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<h1>Listado de libros</h1>
<a href="{{ route('libros.create') }}">Insertar libro</a>
<ul>
   @forelse ($libros as $libro)
   <i class="bi bi-123"></i>

   <li>
    {{ $libro->titulo }}
    <div class="botones d-flex p-2 ">
        <a href="{{ route('libros.edit', $libro) }}"><button class="btn btn-info">Editar</button></a>
        <form action="{{ route('libros.destroy', $libro) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Borrar</button>
        </form>
    </div>

</li>
   @empty
       <li>No se encontraron libros</li>
   @endforelse
   {{ $libros->links() }}

</ul>
@endsection


