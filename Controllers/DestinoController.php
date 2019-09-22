<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\destino;

class DestinoController extends Controller
{
    //
    public function index (){
        $resultado= destino::get();
        return view ("destino.index", array("resultado"=>$resultado));
    }

    public function show (){
        $resultado= destino::find($id);
        return view("destino.index", array("resultado"=>$resultado));

    }

    public function store (Request $request){
        if ($request->id=="")
            $objeto = new destino();
        else
            $objeto= destino::find($request->id);

            $objeto->nombre_destino = $request->txtnombre_destino;
            $objeto->codigo_sede = $request->txtcodigo_sede;
            $objeto->save();
            return redirect(route("destino.index"));

    }

    public function edit ($id){
        $resultado = destino::where("id_destino", $id)->get();
        return view("destino.edit", array("resultado"=>$resultado));
    }

    public function delete($id){
        $objeto= destino::find($request->$id);
        $objeto->delete();
    }
}
