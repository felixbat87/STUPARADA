<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registro;

class RegistroController extends Controller
{
    //
    public function index (){       
        $resultado = registro::get();
         return view ("registro.index", array ("resultado"=>$resultado) );
    }

    public function store (Request $request){
        if ($request->id =="")
            $objeto = new registro();
        else
            $objeto = registro::find($request->id);
        
         $objeto->emailutp = $request->txtemailutp;
         $objeto->password = $request->txtpassword;
         $objeto->estado = $request->txtestado;
         $objeto->md5 = $request->txthidden;
         $objeto->save();
         return redirect (route("registro.index"));
    }

    public function edit ($id){
        $resultado = registro::where("id", $id)->get();
         return view ("registro.edit", array ("resultado"=>$resultado));
    }
}
