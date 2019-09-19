<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    // modelo de registro vinculado con la migracion 

    protected $table ="tbl_registro";
    protected $primaryKey ="id";
    protected $fillable = array ('email','password','estado','md5');

}
