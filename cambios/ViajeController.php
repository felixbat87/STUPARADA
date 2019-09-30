<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\tbl_viaje;
class ViajeController extends Controller
{
    //

     //metodo de vista de formulario
     public function create(){

        return view("");
    }
    
    //mostrar todos los registros 
    public function index(){
        $resultado = tbl_viaje::get();
        return view ("", array ("resultado"=>$resultado) );
    
    }

    // metodo de almacenado de registros
    public function store(Request $request){
    
            if ($request->id =="")
                $objeto = new tbl_viaje();
            else
                $objeto = tbl_viaje::find($request->id);
            
             $objeto->codigo_destino= $request->codigo_destino;//dato foraneo de tabla destino id_destino
             $objeto->hora_de_salida= $request->inputSelectHoras;
             $objeto->estado= $request->estado;
             $objeto->puestos_disponibles= $request->inputSelectPuestos;
             $objeto->codigo_auto= $request->codigo_auto;// dato foraneo de tabla auto id_auto
             $objeto->costo_de_puestos= $request->inputInsertPrecio;
            

             $objeto->save();
             return redirect (route(""));
    
    }
    
    //metodo de editar registros
    
    public function edit($id){
        $resultado = tbl_viaje::where("id_viaje", $id)->get();
         return view ("", array ("resultado"=>$resultado));
    
    }
    
    
    //metodo de eliminar registros
    
    public function delete($id){
    
    $objeto = tbl_viaje::find($id);
    $objeto->delete();
    return redirect (route(""));
    }
}
