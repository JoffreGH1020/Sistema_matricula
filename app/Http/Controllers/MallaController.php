<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Malla;

class MallaController extends Controller
{
    public function mostrar_malla(){
        $malla = DB::table('mallas')->get();
        return view("malla.mostrarMalla")
            ->with("malla", $malla);  
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
        return view("malla.formMalla");
    }

}
