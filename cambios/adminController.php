<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\tbl_admin;
class adminController extends Controller
{
     //metodo de vista de formulario
     public function create(){

        return view("registro_admin");
    }
    
    //mostrar todos los registros 
    public function index(){
        $resultado = tbl_admin::get();
        return view ("", array ("resultado"=>$resultado) );
    
    }

    // metodo de almacenado de registros
    public function store(Request $request){
             $objeto = new tbl_admin();
             $objeto->nombre= $request->nombreadmin;
             $objeto->apellido= $request->apellidoadmin;
             $objeto->cedula= $request->cedulaadmin;
             $objeto->email= $request->email;
             $objeto->password= $request->contraseña;
             $objeto->estado= $request->estado;
             $objeto->save();
              return redirect ("/pruebas");
    
    }
    
    //metodo de editar registros
    
    public function edit($id){
        $resultado = tbl_admin::where("id", $id)->get();
         return view ("", array ("resultado"=>$resultado));
    
    }
    
    
    //metodo de eliminar registros
    
    public function delete($id){
    
    $objeto = tbl_admin::find($id);
    $objeto->delete();
    return redirect (route(""));
    }
}
