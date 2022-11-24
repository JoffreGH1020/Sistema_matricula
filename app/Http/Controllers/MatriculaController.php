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
        
        $matricula = DB::table('matriculas')
        ->select('asignatura','seccion','ciclo','creditos')
        ->join('cursos', 'cursos.id', '=','matriculas.curso_id')
        ->get();
        return view("matricula.mostrarMatri")
        ->with("matricula" ,$matricula);
    }

    public function reg_matri(Request $request){
        $request->validate([
            "curso_id" => "required",
            
            
            "seccion" => "required",
        ]);
        $matricula = new Matricula();
        $matricula->curso_id = $request->input("curso_id");
        
        
        $matricula->seccion = $request->input("seccion");
        $matricula->user_id = Auth::user()->id;
        $matricula->save();
        return redirect("/ver/matriculas");
    }

    public function mostrarform_motri(){
            $curso = DB::table('cursos')->get();
            return view("matricula.formMatri")->with("curso", $curso);
    }
}
