<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ApiXController;
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

Route::get('/', function () {
    // return view('welcome');
    return view('front.index');
    
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

// Productos
Route::get('/productos', 
[App\Http\Controllers\Admin\ProductosController::class, 'productos'])->name('productos');
Route::get('/nuevo-producto', 
[App\Http\Controllers\Admin\ProductosController::class, 'nuevoProducto'])->name('nuevoProducto');
Route::post('/guardar-producto', 
[App\Http\Controllers\Admin\ProductosController::class, 'guardarProducto'])->name('guardarProducto');
Route::get('/editar-producto/{idProducto}', 
[App\Http\Controllers\Admin\ProductosController::class, 'editarProducto'])->name('editarProducto');
Route::post('/actualizarProducto', 
[App\Http\Controllers\Admin\ProductosController::class, 'actualizarProducto'])->name('actualizarProducto');
Route::post('/eliminarProducto', 
[App\Http\Controllers\Admin\ProductosController::class, 'eliminarProducto'])->name('eliminarProducto');

// Categorias
Route::get('/categorias', 
[App\Http\Controllers\Admin\CategoriasController::class, 'categorias'])->name('categorias');
Route::post('/guardar-categoria', 
[App\Http\Controllers\Admin\CategoriasController::class, 'guardarCategoria'])->name('guardarCategoria');
Route::get('/editar-categoria/{IdCategoria}', 
[App\Http\Controllers\Admin\CategoriasController::class, 'editarCategoria'])->name('editarCategoria');
Route::post('/actualizar-categoria', 
[App\Http\Controllers\Admin\CategoriasController::class, 'actualizarCategoria'])->name('actualizarCategoria');
Route::post('/eliminar-categoria', 
[App\Http\Controllers\Admin\CategoriasController::class, 'eliminarCategoria'])->name('eliminarCategoria');


// Marcas
Route::get('/marcas', 
[App\Http\Controllers\Admin\MarcasController::class, 'marcas'])->name('marcas');
Route::post('/guardar-marca', 
[App\Http\Controllers\Admin\MarcasController::class, 'guardarMarca'])->name('guardarMarca');
Route::get('/editar-marca/{IdMarca}', 
[App\Http\Controllers\Admin\MarcasController::class, 'editarMarca'])->name('editarMarca');
Route::post('/actualizar-marca', 
[App\Http\Controllers\Admin\MarcasController::class, 'actualizarMarca'])->name('actualizarMarca');
Route::post('/eliminar-marca', 
[App\Http\Controllers\Admin\MarcasController::class, 'eliminarMarca'])->name('eliminarMarca');


Route::get('/tweets', [ApiXController::class, 'showTweets']);

Route::get('/pruebas', 
[App\Http\Controllers\Admin\ProductosController::class, 'pruebas'])->name('pruebas');

