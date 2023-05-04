<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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
Route::get('/', [ProductoController::class, 'index']);



Route::get('producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('producto/{id}', [ProductoController::class, 'show'])->where('id', "[0-9]+")->name('producto.show');
Route::get('producto/create/', [ProductoController::class, 'create'])->name('producto.create');
Route::get('producto/crear/', [ProductoController::class, 'create'])->name('producto.create');
Route::get('producto/editar/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::get('producto/edit/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::delete('producto/destroy/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');
Route::put('producto/update/{id}',[ProductoController::class, 'update'])->name('producto.update');
Route::post('producto/store',[ProductoController::class, 'store'])->name('producto.store');
