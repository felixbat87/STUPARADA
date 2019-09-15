<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auto_usuario extends Model
{
    //


    protected $table ="user_auto";
    protected $primaryKey ="id_auto";
    protected $fillable = array ('codigo_usuario');



}
