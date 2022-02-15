<?php

use App\Http\Controllers\AñadirTarea;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/tareas', [AñadirTarea::class,'mostrar']);

Route::post('/tareas', [AñadirTarea::class, 'crear']);

Route::post('/tareas/usuario', [UsuarioController::class, 'crear']);

Route::delete('/tareas/{id}', [AñadirTarea::class,'borrar']);
//

Route::get('/usuarios', [UsuarioController::class,'mostrar']);

Route::post('/usuarios/nombreUsuario', [UsuarioController::class, 'crear']);

Route::delete('/usuarios/{id}', [UsuarioController::class,'borrar']);
//

Route::get('/relacion', [UsuarioController::class,'mostrarRelacion']);
//

Route::get('/avanzado', [UsuarioController::class,'mostrarAvanzado']);

Route::post('/avanzado', [UsuarioController::class,'busqueda']);
//
Route::get('/buscarUsuario', [UsuarioController::class, 'ensenaBusqueda']);

Route::post('/buscarUsuario', [UsuarioController::class, 'buscarPorFecha']);