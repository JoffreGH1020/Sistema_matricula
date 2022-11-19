<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CursoController extends Controller
{
    public function mostrar_cusos(){
            $curso = DB::table('cursos')->get();
        return view("curso.mostrarCur")
        ->with("curso", $curso);
    }

    public function reg_cursos(Request $request ){
        $request->validate([
            "carrera_id" => "required",
            "tipo_de_estudio" => "required",
            "asignatura" => "required|unique:cursos",
            "ciclo" => "required",
            "creditos" => "required",
            "HT_sema"  => "required",
            "HP_sema" => "required",
            "TH_sema" => "required",
            "HT_seme" => "required",
            "HP_seme" => "required",
            "TH_seme"=> "required",
        ]);
        $curso = new Curso();
        $curso->carrera_id = $request->input("carrera_id");
        $curso->tipo_de_estudio = $request->input("tipo_de_estudio");
        $curso->asignatura = $request->input("asignatura");
        $curso->ciclo = $request->input("ciclo");
        $curso->creditos = $request->input("creditos");
        $curso->HT_sema = $request->input("HT_sema");
        $curso->HP_sema = $request->input("HP_sema");
        $curso->TH_sema = $request->input("TH_sema");
        $curso->HT_seme = $request->input("HT_seme");
        $curso->HP_seme = $request->input("HP_seme");
        $curso->TH_seme = $request->input("TH_seme");
        $curso->save();
        return redirect("/ver/cursos");
    }

    public function mostrarform_curso(){
        if (session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
            return view("curso.formCur");
        }
        
    }
}
