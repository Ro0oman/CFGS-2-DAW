<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogControler;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Util\HtmlElement;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider withxin a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('primo/{num?}', function($numero=null) {
    return view('primo', compact('numero'));
});

Route::get('tabla/{num?}', function($numero=null) {
    return view('tabla', compact('numero'));
});

 */

/* Route::get('libros', [PruebaController::class, 'index']);

Route::get('libros/{id}', [PruebaController::class, 'show']);
 */

/* Ejercicio 3
Route::get('/', function() {
    return 'Pantalla principal';
});

Route::get('login', function() {
    return 'Login usuario';
});

Route::get('logout', function() {
    return 'logout usuario';
});

Route::get('catalog', function() {
    return 'Listando peliculas';
});

Route::get('catalog/show/{id}', function($id) {
    return 'Vista detalle película '.$id;
});

Route::get('catalog/create', function() {
    return 'Añadir pelicula';
});

Route::get('catalog/edit/{id}', function($id) {
    return 'Modificar pelicula '.$id;
});
*/

/* Route::get('listado', function() {
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
    "autor" => "Arturo Pérez Reverte"),
    array("titulo" => "La historia interminable",
    "autor" => "Michael Ende"),
    array("titulo" => "El Señor de los Anillos",
    "autor" => "J.R.R. Tolkien")
    );
    return view('libros.listado', compact('libros'));
   })->name('listado_libros'); */

/* Route::get('inicio', function() {
    return view("libros.listado");
})->name("inicio"); */

Route::get('listado_libros', [LibroController::class, 'index'])->name('listado_libros');

Route::resource('libros', LibroController::class)
->only(['index', 'show', 'create', 'edit', 'destroy', 'store', 'update']);

Route::get('listado_pedidos', [PedidoController::class, 'index'])->name('listado_pedidos');

Route::resource('pedido', PedidoController::class)
->only(['index', 'show', 'create', 'edit']);

/*
Route::get('fecha', function() {
    return date("d/m/y h:i:s");
});

Route::get('saludo/{nombre?}/{id?}',
function($nombre="Invitado", $id=0)
{
 return "Hola $nombre, tu código es el $id";
})->where('nombre', "[A-Za-z]+")
 ->where('id', "[0-9]+")
 ->name('saludo');



   Route::get('contacto', function() {
    return "Página de contacto";
   })->name('ruta_contacto'); */



/* Ejercicio controladores

Route::get('inicio', function() {
    return 'getHome';
});


Route::get('/', [HomeController::class, 'getHome']) ;
Route::get('catalog', [CatalogControler::class, 'getIndex']) ;
Route::get('catalog/show/{id}', [CatalogControler::class, 'getShow']) ;
Route::get('catalog/create', [CatalogControler::class, 'getCreate']) ;
Route::get('catalog/edit/{id}', [CatalogControler::class, 'getEdit']) ;



*/
