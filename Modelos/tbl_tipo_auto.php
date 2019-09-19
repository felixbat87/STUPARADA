<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_tipo_auto extends Model
{
    protected $table ="tbl_tipo_auto";
    protected $primaryKey ="id";
    protected $fillable = array ('descripcion','puestos');
    
}
