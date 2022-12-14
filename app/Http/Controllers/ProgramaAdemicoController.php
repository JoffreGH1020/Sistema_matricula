<?php

namespace App\Http\Controllers;

use App\Models\Programa_ademico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

class ProgramaAdemicoController extends Controller
{
    public function mostrar_prog_acada(){
        if (session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
            $proga = DB::table('programa_ademicos')
        ->select('asignatura', 'mallas.codigo', 'prerequisitos', 'creditos', 'carga_horaria',
        'ciclo', 'semestre_academico', 'nombres', 'apellidos')
        ->join('mallas', 'mallas.id', '=', 'programa_ademicos.malla_id')
        ->join('cursos', 'cursos.id', '=', 'programa_ademicos.cursos_id')
        ->join('docentes', 'docentes.id','=', 'programa_ademicos.docente_id')
        ->get();
        return view("programa.mostrarProgr")
            ->with("proga", $proga);  
        }
        
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
        if (session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
            $malla = DB::table('mallas')->get();
            $curso = DB::table('cursos')->get();
            $docente = DB::table('docentes')->get();
        return view("programa.formProga")->with("malla", $malla)->with("curso", $curso)->with("docente", $docente);

        }
    }
}
