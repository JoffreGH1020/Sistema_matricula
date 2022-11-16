<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTipo;

class UserTipoController extends Controller
{
    public function getTipo (int $id){
        session (['tipo_usuario' => UserTipo::where("user_id", $id)->first()->tipo]);
        return session('tipo_usuario');
    }
}
