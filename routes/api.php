<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/ejemplo', function (Request $request) {
//     return 'Hola mundo desde las apis';
// });

Route::get('/productos', 
[App\Http\Controllers\Api\Admin\ProductosController::class, 'index'])
->name('productos');

Route::get('/producto/{id}', 
[App\Http\Controllers\Api\Admin\ProductosController::class, 'producto'])
->name('producto');
Route::post('/guardar_producto', 
[App\Http\Controllers\Api\Admin\ProductosController::class, 'guardar_producto'])
->name('guardar_producto');

