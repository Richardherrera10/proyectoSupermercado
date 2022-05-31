<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleos;
class EmpleosController extends Controller
{
    public function index(){
        return view("empleos.index");
    }

    public function subirEmpleo(Request $request){
       $formFields=$request->validate([
            "empleosDisponibles"=>"required",
           "primerSegundoNombre" =>"required",
           "primerSegundoApellido"=>"required",
           "nacionalidad"=>"required",
           "fechaDeNacimiento"=>"required",
           "direccion"=>"required",
           "telefono"=>"required",
           "email"=>"required"
       ]);
       
       if($request->hasFile("carta_path") and $request->hasFile("cv_path")){
           $formFields["carta_path"] = $request->file("carta_path")->store("cartasRecomendacion", "public");
           $formFields["cv_path"] = $request->file("cv_path")->store("curriculums", "public");
       }
       Empleos::create($formFields);
       return redirect("/") -> with("message", "Acaba de publicar su empleo satisfactoriamente!");
    }
}

