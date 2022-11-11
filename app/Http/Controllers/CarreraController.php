<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carrera;


class CarreraController extends Controller
{
    public function mostrar_carrera(){
        $carrera = DB::table('carreras')->get();
        return view("carrera.mostrarCarr")
            ->with("carrera", $carrera);  
    }



    public function reg_carreras(Request $request){
        $request->validate([
            "nombre_carr" => "required",
            "facultad_id" => "required",
        ]);
        $carrera = new Carrera();
        $carrera->nombre_carr = $request->input("nombre_carr");
        $carrera->facultad_id = $request->input("facultad_id");
        $carrera->save();
        return redirect("/ver/carrera");
    }

    public function mostrarform_carr(){
        return view("carrera.formCarr");
    }
    
}
