<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_sedes extends Model
{
    protected $table ="tbl_sedes";
    protected $primaryKey ="id";
    protected $fillable = array('nombre');
}
