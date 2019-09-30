<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\usuario_sin_auto;
class User_sin_autoController extends Controller
{
    //

      //metodo de vista de formulario
      public function create(){

        return view("");
    }
    
    //mostrar todos los registros 
    public function index(){
        $resultado = usuario_sin_auto::get();
        return view ("", array ("resultado"=>$resultado) );
    
    }

    // metodo de almacenado de registros
    public function store(Request $request){
    
            if ($request->id =="")
                $objeto = new usuario_sin_auto();
            else
                $objeto = usuario_sin_auto::find($request->id);
            
             $objeto->nombre= $request->inputPasajeroRegistroNombre;
             $objeto->apellido= $request->inputPasajeroRegistroApellido;
             $objeto->cedula= $request->inputPasajeroRegistroCedula;
             $objeto->celular= $request->inputPasajeroRegistroTelefono;
             $objeto->perfil_image= $request->perfil_image;
             $objeto->estado= $request->estado;
             $objeto->captura_matricula= $request->inputPasajeroRegistroMatricula;
             $objeto->id_centro= $request->selectPasajeroRegistroSede;
             $objeto->id_registro= $request->id_registro;//llave foranea en tabla registro id

             $objeto->save();
             return redirect (route(""));
    
    }
    
    //metodo de editar registros
    
    public function edit($id){
        $resultado = usuario_sin_auto::where("id_usuario", $id)->get();
         return view ("", array ("resultado"=>$resultado));
    
    }
    
    
    //metodo de eliminar registros
    
    public function delete($id){
    
    $objeto = usuario_sin_auto::find($id);
    $objeto->delete();
    return redirect (route(""));
    }
    
}
