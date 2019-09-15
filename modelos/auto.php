<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auto extends Model
{
    protected $table ="tbl_auto";
    protected $primaryKey ="id_tipo";
    protected $fillable = array ('placa_image','image_auto','seguro_image','mes','anno','estado','codigo_auto');
}
