<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ComentariosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('post', PostController::class)
->only(['index', 'show', 'create', 'edit', 'destroy', 'store', 'edit', 'update']);

Route::resource('comentario', ComentariosController::class)
->only(['index', 'show', 'create', 'edit', 'destroy', 'store', 'edit', 'update']);

Route::resource('usuario', UsuariosController::class)
->only(['index', 'show', 'create', 'edit', 'destroy', 'store', 'edit', 'update']);

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//Route::get('posts', [PostController::class, 'index'])->name('posts_listado');




