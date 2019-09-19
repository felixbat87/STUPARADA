<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_auto extends Model
{
    //
    protected $table ="tbl_auto";
    protected $primaryKey ="id_auto";
    protected $fillable = array ('placa_image','image_auto','seguro_image','mes','year','estado','codigo_usuario','codigo_tipo');

}
