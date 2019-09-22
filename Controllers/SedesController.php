<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\sedes;

class SedesController extends Controller
{
    //
    public function index(){
        $resultado= sedes::get();
        return view("sedes.index", array("resultado"=>$resultado));

    }

    public function show(){
        $resultado= sedes::find($id);
        return view("sedes.index", array("resultado"=>$resultado));
    }

    public function store(Request $request){
        if ($request->id=="")
            $objeto= new sedes;
        else
        $objeto= sedes::find($request->id);

        $objeto->nombre= $request->txtnombresede;
        $objeto->save();
        return redirect(route("sedes.index"));
    }

    public function edit($id){
        $resultado= sedes::where("id", $id)->get();
        return view("sedes.edit", array("resultado"=>$resultado));
    }

    public function delete($id){
        $objeto= sedes::find($request->id);
        $objeto->delete();
    }
}
