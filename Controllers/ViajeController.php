<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\viaje;

class ViajeController extends Controller
{
    //
    public function index(){
        $resultado= viaje::get();
        return view("viaje.index", array("resultado"=>$resultado));

    }

    public function show(){
        $resultado= viaje::find($id);
        return view("viaje.index", array("resultado"=>$resultado));
    }

    public function store(Request $request){
        if ($request->id=="")
            $objeto= new viaje;
        else
        $objeto= viaje::find($request->id);

        $objeto->codigo_destino= $request->txtcodigo_destino;
        $objeto->hora_de_salida= $request->txthora_de_salida;
        $objeto->estado= $request->txtestado;
        $objeto->puestos_disponibles= $request->txtpuestos_disponibles;
        $objeto->codigo_auto= $request->txtcodigo_auto;
        $objeto->costo_de_puestos= $request->txtcosto_de_puesto;
        $objeto->save();
        return redirect(route("viaje.index"));
    }

    public function edit($id){
        $resultado= viaje::where("id_viaje", $id)->get();
        return view("viaje.edit", array("resultado"=>$resultado));
    }

    public function delete($id){
        $objeto= viaje::find($request->id);
        $objeto->delete();
    }
}
