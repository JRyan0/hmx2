<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            $login = $request->input("emailCadastro");
            $senha = $request->input("password");

            $credential = ['email' => $login, 'password' => $senha];
            if($request->remember !=null){
                if(Auth::attempt($credential)){
                    session()->regenerate();
                    $request->session()->put('usuario', $login);
                    return redirect()->route("home");
                }else{
                    $request->session()->flash("err", "Usuário / Senha Inválidos");
                    return redirect()->route("logar");
                }
            }else{
                if(Auth::attempt($credential)){
                    session()->regenerate();
                    $request->session()->put('usuario', $login);

                }else{
                    $request->session()->flash("err", "Usuário / Senha Inválidos");
                    return redirect()->route("logar");
                }
            }

        }


        return view("hmx/logar", $data);
    }
    public function sair(Request $request){
        Auth::logout();
        return redirect()->route("home");

    }
}
