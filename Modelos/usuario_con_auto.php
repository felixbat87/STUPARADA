<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_con_auto extends Model
{
    //modelo usuario_con_auto vinculado con la migracion
 
    protected $table ="tbl_usuario_con_auto";
    protected $primaryKey ="id_usuario";
    protected $fillable = array ('nombre','apellido','cedula','celular','perfil_image','licencia_image','fecha_expedida','fecha_expiracion','estado','captura_matricula','id_centro','id_registro');
    
}
