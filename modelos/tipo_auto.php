<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_auto extends Model
{
    protected $table ="tbl_type";
    protected $primaryKey ="id";
    protected $fillable = array ('codigo_tipo','descripcion','puestos');
    
}
