<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_destino extends Model
{
    //
    
    protected $table ="tbl_destino";
    protected $primaryKey ="id_destino";
    protected $fillable = array('nombre_destino','codigo_sede');
}
