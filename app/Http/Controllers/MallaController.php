<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Malla;

class MallaController extends Controller
{
    public function mostrar_malla(){
        if(session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
            $malla = DB::table('mallas')
            ->select('ciclo', 'codigo', 'tipo_de_estudio', 'asignatura',
                    'HT_sema', 'HP_sema', 'TH_sema', 'HT_seme', 'HP_seme', 'TH_seme',
                    'creditos', 'prerequisitos')
            ->join('cursos', 'cursos.id', '=', 'mallas.curso_id')
            ->get();
        return view("malla.mostrarMalla")
            ->with("malla", $malla);  
        }
        
    }

    public function reg_mallas(Request $request){
        $request->validate([
            "curso_id" => "required",
            "codigo" => "required",
        ]);
        $malla = new Malla();
        $malla->curso_id = $request->input("curso_id");
        $malla->codigo = $request->input("codigo");
        $malla->prerequisitos = $request->input("prerequisitos");
        $malla->save();
        return redirect("/ver/mallas");
    }

    public function mostrarform_malla(){
        if (session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
        return view("malla.formMalla");
        }
    }

}
