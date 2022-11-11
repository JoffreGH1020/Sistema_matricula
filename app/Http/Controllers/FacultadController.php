<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class FacultadController extends Controller
{
    public function mostrar_facultad(){
        $facultad = DB::table('facultads')->get();
        return view("facultad.mostrarFacu")
            ->with("facultad", $facultad);  
    }

    


    public function reg_facultad(Request $request){
        $request->validate([
            "nombre_facultad" => "required|unique:facultads"
        ]);
        $facultad = new Facultad();
        $facultad->nombre_facultad = $request->input("nombre_facultad");            
        $facultad->save();
        return redirect("/ver/facultad");
        
    }

    public function mostrarform_facu(){
        return view("facultad.formFacu");
    }
}
