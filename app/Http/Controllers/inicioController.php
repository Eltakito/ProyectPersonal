<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
class inicioController extends Controller
{
    public function register(Request $request){
        // Validar credenciales del usuario
        $usuario = $request->input('usuario');
        $contrasena = $request->input('contrasena');


        return redirect()->route('privada');

    }
    public function login(Request $request){

    }
    public function logout(Request $request){

    }
}
