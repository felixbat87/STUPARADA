<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_admin extends Model
{
    //

    protected $table ="tbl_admin";
    protected $primaryKey ="id";
    protected $fillable = array ('nombre','apellido','cedula','email','password','estado');



}
