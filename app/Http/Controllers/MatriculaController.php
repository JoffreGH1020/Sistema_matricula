<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Validated;

class MatriculaController extends Controller
{

    public function mostrar_matri(){
        
        $matricula = DB::table('matriculas')->get();
        return view("matricula.mostrarMatri")
        ->with("matricula" ,$matricula);
    }

    public function reg_matri(Request $request){
        $request->validate([
            "curso" => "required",
            "ciclo" => "required",
            "creditos" => "required",
            "seccion" => "required",
        ]);
        $matricula = new Matricula();
        $matricula->curso = $request->input("curso");
        $matricula->ciclo = $request->input("ciclo");
        $matricula->creditos = $request->input("creditos");
        $matricula->seccion = $request->input("seccion");
        $matricula->user_id = Auth::user()->id;
        $matricula->save();
        return redirect("/ver/matriculas");
    }

    public function mostrarform_motri(){
            return view("matricula.formMatri");
    }
}
