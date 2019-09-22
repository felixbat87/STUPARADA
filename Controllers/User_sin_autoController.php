<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\usuario_sin_auto;

class User_sin_autoController extends Controller
{
    //
    public function index(){
        $resultado= usuario_sin_auto::get();
        return view("usuario_sin_auto.index", array("resultado"=>$resultado));

    }

    public function show(){
        $resultado= usuario_sin_auto::find($id);
        return view("usuario_sin_auto.index", array("resultado"=>$resultado));
    }

    public function store(Request $request){
        if ($request->id=="")
            $objeto= new usuario_sin_auto;
        else
        $objeto= usuario_sin_auto::find($request->id);

         $objeto->nombre = $request->txtnombre;
         $objeto->apellido = $request->txtapellido;
         $objeto->cedula = $request->txtcedula;
         $objeto->celular = $request->txtcelular;
         $objeto->perfil_image = $request->txtperfil_image;
         $objeto->estado = $request->txtestado;
         $objeto->captura_matricula->txtmatricula;
         $objeto->id_centro = $request->txthidden;
         $objeto->id_registro = $request->txthidden;
        $objeto->save();
        return redirect(route("usuario_sin_auto.index"));
    }

    public function edit($id){
        $resultado= usuario_sin_auto::where("id_usuario", $id)->get();
        return view("usuario_sin_auto.edit", array("resultado"=>$resultado));
    }

    public function delete($id){
        $objeto= usuario_sin_auto::find($request->id);
        $objeto->delete();
    }
}
