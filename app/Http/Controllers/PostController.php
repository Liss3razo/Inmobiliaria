<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://jsonplaceholder.typicode.com/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', 'posts');


$posts= json_decode($response ->getBody()->getContents())

return view('post.login', compact('posts'));
}

public function log(){
        return view('login');
}
 
public function openPropiedad(){
       
   return view('AbrirPropiedad');
}

public function mostrarUsuarios(){
    return view('usuarios');
}

public function mostrarPropiedades(){
    return view('propiedades');
}

}
