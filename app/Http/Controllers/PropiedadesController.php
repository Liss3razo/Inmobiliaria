<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    public function mostrarPropiedades(){
        return view('propiedades');
    }

    public function detalloperaccion(){
        return view('administrador.detalloperaccion');
    }

    public function usuarios(){
        {
            $response = Http::get('http://localhost:8080/usuarios/listar');
            $usuarios = $response->json(); // Convierte la respuesta JSON en un array asociativo
    
            return view('administrador.usuarios', compact('usuarios'));
        }
    }
    
    public function eliminarUsuario($id){
        $response = Http::delete('http://localhost:8080/usuarios/eliminar/'.$id);
        return redirect()->route('administrador.usuarios');
    }

     









}

