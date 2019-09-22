<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\enlace_viaje;

class Enlace_viajeController extends Controller
{
    //
    public function index(){
        $resultado= enlace_viaje::get();
        return view("enlace_viaje.index", array("resultado"=>$resultado));

    }

    public function show(){
        $resultado= enlace_viaje::find($id);
        return view("enlace_viaje.index", array("resultado"=>$resultado));
    }

    public function store(Request $request){
        if ($request->id=="")
            $objeto= new enlace_viaje;
        else
        $objeto= enlace_viaje::find($request->id);

        $objeto->codigo_viaje= $request->txtcodigo_viaje;
        $objeto->codigo_user_sin_auto= $request->txtcodigo_user_sin_auto;
        $objeto->estado= $request->txtestado;
        $objeto->save();
        return redirect(route("enlace_viaje.index"));
    }

    public function edit($id){
        $resultado= enlace_viaje::where("codigo_viaje", $id)->get();
        return view("enlace_viaje.edit", array("resultado"=>$resultado));
    }

    public function delete($id){
        $objeto= enlace_viaje::find($request->id);
        $objeto->delete();
    }
}
