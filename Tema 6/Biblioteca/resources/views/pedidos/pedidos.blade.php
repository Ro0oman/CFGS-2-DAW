@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
<h1>Listado de pedidos</h1>
<ul>
   @forelse ($pedidos as $pedido)
   <li><a href="{{ route('pedido.show', $pedido) }}">
   {{ $pedido->numpedido }}
 </a></li>
   @empty
       <li>No se encontraron pedidos</li>
   @endforelse
   {{ $pedidos->links() }}

</ul>
@endsection

