@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<h1>Listado de Posts</h1>

<a href="{{ route('post.create') }}" class="caja d-inline p-1 border border-primary">
    <button class="border-0 bg-transparent m-3">
        Insertar Post
    </button><i class="bi bi-plus "></i>
</a>

<ul>
   @forelse ($posts as $post)
   <li>
    {{ $post->titulo }}
    (Id del usuario:
    {{$post->usuario_id}})
    <div class="botones d-flex p-2 ">
        <a href="{{ route('post.edit', $post) }}">
            <button class="btn btn-info">
                <i class="bi bi-pencil-fill"></i>
            </button>
        </a>

        <form action="{{ route('post.destroy', $post) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">
                <i class="bi bi-trash-fill"></i>
            </button>
        </form>

        <a href="{{ route('post.show', $post) }}">
            <button class="btn btn-info">
                <i class="bi bi-eye-fill"></i>
            </button>
        </a>

    </div>


</li>
   @empty
       <li>No se encontraron Posts</li>
   @endforelse
   {{ $posts->links() }}

</ul>
@endsection


