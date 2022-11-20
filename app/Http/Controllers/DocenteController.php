<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Docente;
use Illuminate\Support\Facades\Hash;

class DocenteController extends Controller
{
    public function mostrar_docente(){
        if (session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
            $docente = DB::table('docentes')->get();
        return view("docente.mostrarDocn")
            ->with("docente", $docente); 
        }
         
    }



    public function reg_docentes(Request $request){
        $request->validate([
            "carrera_id" => "required",
            "nombres" => "required",
            "apellidos" => "required",
            "DNI" => "required|unique:docentes",
            "correo" => "required",
            "telefono" => "required|unique:docentes",
            "codigo" => "required|unique:docentes",
            "contraseña" => "required",
            "estado" => "required",
        ]);
        $docente = new Docente();
        $docente->carrera_id = $request->input("carrera_id");
        $docente->nombres = $request->input("nombres");
        $docente->apellidos = $request->input("apellidos");
        $docente->DNI = $request->input("DNI");
        $docente->correo = $request->input("correo");
        $docente->telefono = $request->input("telefono");
        $docente->codigo = $request->input("codigo");
        $docente->contraseña = Hash::make($request->input("contraseña"));
        $docente->estado = $request->input("estado");
        $docente->save();
        return redirect("/ver/docentes");
    }

    public function mostrarform_docn(){
        if (session('tipo')!="administrador"){
            return redirect(route("home"));
        }else{
            $carrera = DB::table('carreras')->get();
            return view("docente.formDocn")->with("carrera", $carrera);
        }
    }
}
