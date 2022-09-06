<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\ClienteService;

class ClienteController extends Controller
{
    public function index(Request $request){
        $data =[];
        
        return view("hmx/cadastrar", $data);
    }
    public function cadastrarCliente(Request $request){
        
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->usuario = $request->input("cpf", "");
        $usuario->password = $request->input("password", "");
        
        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input("endereco", "");
       

        $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($usuario, $endereco);


        $message = $result["message"];
        $status = $result["status"];


        $request->session()->flash($status, $message);

        return view("hmx/cadastrar");


    }
     
}
