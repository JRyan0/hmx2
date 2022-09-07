<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth;

class Usuario extends RModel implements Authenticatable
{
    protected $table = "usuarios";

    protected $fillable = ['email', 'usuario', 'password', 'nome'];

    public function getAuthIdentifierName(){
        return "email";
    }
    public function getAuthIdentifier(){
        return $this->email;
    }
    public function getAuthPassword(){
        return $this->password;
    }
    public function getRememberToken(){

    }
    public function setRememberToken($value){

    }
    public function getRememberTokenName(){

    }
    public function setLoginAttribute($login){
        $value = preg_replace("/[^0-9]/", "", $login);
        $this->atributes["email"]=$value;
    }

}
