<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbrirPropiedadController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'log']);

Route::get('/usuarios', [UsuariosController::class, 'mostrarUsuarios']);

Route::get('/propiedades', [PropiedadesController::class, 'mostrarPropiedades']);

Route::get('/propiedades/open', [AbrirPropiedadController::class, 'openPropiedad']);


