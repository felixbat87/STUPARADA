<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\auto;

class AutoController extends Controller
{
    //
    public function index (){       
        $resultado = auto::get();
         return view ("auto.index", array ("resultado"=>$resultado) );
    }

    public function store (Request $request){
        if ($request->id =="")
            $objeto = new auto();
        else
            $objeto = auto::find($request->id);
        
         $objeto->placa_image = $request->txtimagen_placa;
         $objeto->image_auto = $request->txtimagen_auto;
         $objeto->seguro_image = $request->txtseguro_image;
         $objeto->codigo_usuario = $request->txthidden;
         $objeto->mes = $request->txtmes;
         $objeto->annio = $request->txtAnnio;
         $objeto->estado = $request->txtestado;
         $objeto->codigo_tipo = $request->txthiddent;
         $objeto->codigo_usuario = $request->txthiddenu;
         $objeto->save();
         return redirect (route("auto.index"));
    }

    public function edit ($id){
        $resultado = auto::where("id_auto", $id)->get();
         return view ("auto.edit", array ("resultado"=>$resultado));
    }

    public function delete ($id){
        $objeto =  auto::find($request->id);
        $objeto->delete();
    }

}
