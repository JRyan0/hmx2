<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            $login = $request->input("usuario");
            $senha = $request->input("password");
           
            $login = preg_replace("/[^0-9]/", "", $login);

            $credential = ['usuario' => $login, 'password' => $senha];
            if(Auth::attempt($credential)){
                return redirect()->route("home");
            }else{
                $request->session()->flash("err", "Usuário / Senha Inválidos");
                return redirect()->route("logar");
            }

        }


        return view("hmx/logar", $data);
    }
    public function sair(Request $request){
        Auth::logout();
        return redirect()->route("home");

    }
}
