<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log as FacadesLog;
use Log;

class ClienteService
{
    public function salvarUsuario(Usuario $user, Endereco $endereco){
        try{
            $dbUsuario = Usuario::where("email", $user->email)->first();
            if($dbUsuario){
                return ['status' => 'err', 'message' => 'Login ja cadastrado no sistema'];
            }

            DB::beginTransaction();
            $user->save();
            $endereco->usuario_id = $user->id;
            $endereco->save();
            DB::commit();

            return['status' => 'ok', 'message' => 'Usuario cadastrado com sucesso!'];

        }catch(Exception $e){
            FacadesLog::error("ERRO", ['file' => 'ClienteService.salvarUsuario', 'message' => $e->getMessage()]);
            DB::rollback();
            return ['status' => 'err', 'message' => 'Näo foi possível cadastrar um usuário'];
        }
    }


}

?>