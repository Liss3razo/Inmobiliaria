<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbrirPropiedadController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Inicio', [PostController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PostController::class, 'log']);

Route::get('/usuarios', [PostController::class, 'mostrarUsuarios']);

Route::get('/propiedades', [PostController::class, 'mostrarPropiedades']);

Route::get('/propiedades/open', [PostController::class, 'openPropiedad']);


