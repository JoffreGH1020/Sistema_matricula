<?php

namespace App\Http\Controllers;

use App\Models\Programa_ademico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramaAdemicoController extends Controller
{
    public function mostrar_prog_acada(){
        $proga = DB::table('programa_ademicos')->get();
        return view("programa.mostrarProgr")
            ->with("proga", $proga);  
    }



    public function reg_prog_acada(Request $request){
        $request->validate([
            "malla_id" => "required",
            "cursos_id" => "required",
            "docente_id" => "required",
        ]);
        $proga = new Programa_ademico();
        $proga->malla_id = $request->input("malla_id");
        $proga->cursos_id = $request->input("cursos_id");
        $proga->docente_id = $request->input("docente_id");
        $proga->carga_horaria = $request->input("carga_horaria");
        $proga->semestre_academico = $request->input("semestre_academico");
        $proga->save();
        return redirect("/ver/programas");
    }

    public function mostrarform_prog_acada(){
        return view("programa.formProga");
    }
}
