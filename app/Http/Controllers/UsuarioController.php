<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            $usuario = $request->input("usuario");
            $senha = $request->input("password");
           
            $credential = ['usuario' => $usuario, 'password' => $senha];
            if(Auth::attempt($credential)){
                dd("logado");
            }else{
                dd("Dados invalidos");
            }
        }

        return view("hmx/logar", $data);
    }
}
