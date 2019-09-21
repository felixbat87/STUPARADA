<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario_con_auto;

class User_con_autoController extends Controller
{
    //
    public function index (){       
        $resultado = usuario_con_auto::get();
         return view ("usuarioa.index", array ("resultado"=>$resultado) );
    }

    public function store (Request $request){
        if ($request->id =="")
            $objeto = new usuario_con_auto();
        else
            $objeto = usuario_con_auto::find($request->id);
        
         $objeto->nombre = $request->txtnombre;
         $objeto->apellido = $request->txtapellido;
         $objeto->cedula = $request->txtcedula;
         $objeto->celular = $request->txtcelular;
         $objeto->perfil_image = $request->txtperfil_image;
         $objeto->licencia_image = $request->txtlicencia_image;
         $objeto->fecha_expedida = $request->txtfecha_expedida;
         $objeto->fecha_expiracion = $request->txtfecha_expiracion;
         $objeto->estado = $request->txtestado;
         $objeto->captura_matricula->txtmatricula;
         $objeto->id_centro = $request->txthidden;
         $objeto->id_registro = $request->txthidden2;
         $objeto->save();
         return redirect (route("usuarioa.index"));
    }

    public function edit ($id){
        $resultado = usuario_con_auto::where("id", $id)->get();
         return view ("usuarioa.edit", array ("resultado"=>$resultado));
    }
}
