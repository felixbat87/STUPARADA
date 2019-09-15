<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_viaje extends Model
{
    
    protected $table ="tbl_viaje";
    protected $primaryKey ="id_viaje";
    protected $fillable = array('codigo_destino','hora_de_salida','estado','puestos_disponibles','codigo_auto','costo_de_puestos'); 
}
