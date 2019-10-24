<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticaController extends Controller
{
    function inicio(){
        return view('base.index');
    }
    
    function login(Request $request){
        $nombre = $request->input('nombre');
        $clave = $request->input('password');
        $values = [
                'nombre' => $nombre,
                'password' => $clave
            ];
        if(strcmp($nombre, 'pepe') === 0 && strcmp($clave, 'PEPE') === 0){
            return redirect('home');
        } else{
            return redirect('login')->withInput($values);
        }
    }
}
