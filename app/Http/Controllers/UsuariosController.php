<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    public function mostrarUsuarios(){
        return view('usuarios');
    }


    public function crear(Request $request)
    {
        $response = Http::post('http://localhost:8080/usuarios/guardar', [
            'id_usuario' => $request->input('id_usuario'),
            'DNI' => $request->input('DNI'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'username' => $request->input('username'),
            'tipo' => $request->input('tipo', 'USER'),
            'metodopago' => $request->input('metodopago'),

        ]);

        return redirect()->route('usuarios.crear');
    }


    public function ver($id){
        $response = Http::get('http://localhost:8080/usuarios/obtener/'.$id);
        $usuario = $response->json();
        return view('usuarios.update', compact('usuario'));
    }

    public function login(Request $request)
    {
        $response = Http::get('http://localhost:8080/propiedades/listar');
        $productos = $response->json(); // Convierte la respuesta JSON en un array asociativo

        $responseUsuarios = Http::get('http://localhost:8080/usuarios/listar');
        $usuarios = $responseUsuarios->json();

        $usuario = collect($usuarios)->firstWhere('email', $request->input('email'));

        if ($usuario && $usuario['password'] === $request->input('password')) {
            // Realizar la autenticación manual
            if ($usuario['tipo'] === 'USER') {
                return view('propiedades.catalogo', compact('propiedades'));
            } elseif ($usuario['tipo'] === 'ADMIN') {
                return view('propiedades.create', compact('propiedades'));
            }
        } else {
            // Si las credenciales son incorrectas, muestra un mensaje de error en la vista de inicio de sesión
            return view('usuarios.login', compact('propiedades'));
        }
    }






}

