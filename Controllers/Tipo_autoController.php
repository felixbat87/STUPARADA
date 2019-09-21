<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_auto;

class Tipo_autoController extends Controller
{
    //
    public function index (){       
        $resultado = tipo_auto::get();
         return view ("tipo.index", array ("resultado"=>$resultado) );
    }

    public function store (Request $request){
        if ($request->id =="")
            $objeto = new tipo_auto();
        else
            $objeto = tipo_auto::find($request->id);
        
         $objeto->descripcion = $request->txtdescrip;
         $objeto->puestos = $request->txtpuestos;
         $objeto->save();
         return redirect (route("tipo.index"));
    }

    public function edit ($id){
        $resultado = tipo_auto::where("id", $id)->get();
         return view ("tipo.edit", array ("resultado"=>$resultado));
    }
}

