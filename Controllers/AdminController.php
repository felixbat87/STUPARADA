<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\admin;

class AdminController extends Controller
{
    //
    public function index(){
        $resultado= admin::get();
        return view("admin.index", array("resultado"=>$resultado));

    }

    public function show(){
        $resultado= admin::find($id);
        return view("admin.index", array("resultado"=>$resultado));
    }

    public function store(Request $request){
        if ($request->id=="")
            $objeto= new admin;
        else
        $objeto= admin::find($request->id);

         $objeto->nombre = $request->txtnombre;
         $objeto->apellido = $request->txtapellido;
         $objeto->cedula = $request->txtcedula;
         $objeto->email = $request->txtemail;
         $objeto->password = $request->txtpassword;
         $objeto->estado = $request->txtestado;
         $objeto->save();
        return redirect(route("admin.index"));
    }

    public function edit($id){
        $resultado= admin::where("id", $id)->get();
        return view("admin.edit", array("resultado"=>$resultado));
    }

    public function delete($id){
        $objeto= admin::find($request->id);
        $objeto->delete();
    }
}
