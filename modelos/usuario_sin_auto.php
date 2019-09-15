<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_sin_auto extends Model
{

    protected $table ="tbl_usuario_sin_auto";
    protected $primaryKey ="id_usuario";
    protected $fillable = array ('nombre','apellido','cedula','celular','perfil_image','estado','id_centro','id_registro');

}
