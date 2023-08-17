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

<<<<<<< HEAD



Route::get('/login', [LoginController::class, 'log']);
Route::get('/usuarios', [UsuariosController::class, 'mostrarUsuarios']);
Route::get('/propiedades', [PropiedadesController::class, 'mostrarPropiedades']);
Route::get('/propiedades/open', [AbrirPropiedadController::class, 'openPropiedad']);
=======
Route::get('/login', [PostController::class, 'log']);

Route::get('/usuarios', [PostController::class, 'mostrarUsuarios']);

Route::get('/propiedades', [PostController::class, 'mostrarPropiedades']);

Route::get('/propiedades/open', [PostController::class, 'openPropiedad']);
>>>>>>> 6c86daaba055c653801e2ff2aeb493976169347e



Route::get('/usuarios/compras', [usuarioController::class, 'compras'])->name('usuario.compras');
Route::get('/usuarios/detallecompra', [usuarioController::class, 'detalleoperacion'])->name('usuario.detalleoperacion');
Route::get('/usuarios/home', [usuarioController::class, 'home'])->name('usuario.home'); 
Route::post('/usuarios/login', [usuarioController::class, 'login'])->name('usuario.login');
Route::get('/usuarios/prpropiedeshome', [usuarioController::class, 'propiedadohome'])->name('usuarios.productohome');
Route::get('/usuarios/registro', [usuarioController::class, 'registro'])->name('usuario.registro');
Route::get('/usuarios/resumenorden', [usuarioController::class, 'resumenorden'])->name('usuario.resumenorden');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|para crear  
por ejemplo tenemos esta para creaer producto
Route::get('/productos/crear', [ProductoController::class, 'mostrar'])->name('productos.crear');
Route::post('productos/crear', [ProductoController::class, 'crear'])->name('productos.crear.post');
Route::get('/productos/eliminar/{id}', [ProductoController::class, 'eliminar'])->name('productos.eliminar');
Route::get('/productos/ver/{id}', [ProductoController::class, 'ver'])->name('productos.ver');
Route::post('/productos/modificar', [ProductoController::class, 'modificar'])->name('productos.modificar');
Route::get('/catalogo', [ProductoController::class, 'catalogo'])->name('catalogo');


-------------------
Route::get('/usuarios/carrito', [usuarioController::class, 'carrito'])->name('usuario.carrito');
Route::get('/usuarios/compras', [usuarioController::class, 'compras'])->name('usuario.compras');
Route::get('/usuarios/detallecompra', [usuarioController::class, 'detallecompra'])->name('usuario.detallecompra');
Route::get('/usuarios/home', [usuarioController::class, 'home'])->name('usuario.home'); 
Route::post('/usuarios/login', [usuarioController::class, 'login'])->name('usuario.login');
Route::get('/usuarios/productohome', [usuarioController::class, 'productohome'])->name('usuarios.productohome');
Route::get('/usuarios/registro', [usuarioController::class, 'registro'])->name('usuario.registro');
Route::get('/usuarios/resumenorden', [usuarioController::class, 'resumenorden'])->name('usuario.resumenorden');


----------------
Route::post('/carrito/agregar', 'CarritoController@agregarProducto');
Route::delete('/carrito/eliminar', 'CarritoController@eliminarProducto');
|
*/