<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_enlace_viaje extends Model
{
    //
    protected $table ="tbl_enlace_viaje";
    //protected $primaryKey ="id";
    protected $fillable = array ('codigo_viaje','codigo_user_sin_auto','estado');

}
