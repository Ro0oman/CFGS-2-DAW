@extends('plantilla')
@section('titulo', 'Post')
@section('contenido')

<div class="mx-auto" style="width: 800px;">
    <form action="{{ route('post.destroy', $post) }}" method="POST">
        @method('DELETE')
        @csrf
        <h2>Eliminar Post
        <button class="btn btn-danger">
            <i class="bi bi-trash-fill"></i>
        </button></h2>
    </form>
</div>

    <div class="mx-auto" style="width: 800px;">
        <h1>{{ $post->titulo }}</h1>
        <pre>{{ $post->created_at }}</pre>
    </div>
    <div class="mx-auto" style="width: 800px;">
        {{ $post->contenido }}
    </div>
    <hr>
    <div class="mx-auto" style="width: 800px;">
        <h2>Comentarios</h2>
        <a href="{{ route('comentario.create') }}" class="caja d-inline p-1 border border-primary">
            <button class="border-0 bg-transparent m-3">
                Crear comentario
            </button><i class="bi bi-plus "></i>
        </a>
        <ul class="list-group">
        @forelse ($comentarios as $comentario )
        <?php
        $properties = get_object_vars($comentario);
        ?>
            <li class="list-group-item"> {{ $properties['contenido'] }}</li>
            <li class="list-group-item disabled">Usuario :  {{ $properties['usuario_id'] }} -- {{ $properties['created_at'] }}</li>
        @empty
        @endforelse
         </ul>
         <br>

    </div>



@endsection
