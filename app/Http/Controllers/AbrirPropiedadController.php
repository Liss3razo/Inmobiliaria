<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbrirPropiedadController extends Controller
{
    public function openPropiedad(){
        return view('AbrirPropiedad');
    }
}
