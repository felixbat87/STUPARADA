<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblViaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_viaje', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_viaje');
            $table->bigInteger('codigo_destino')->unsigned();
            $table->foreign('codigo_destino')->references('id_destino')->on('tbl_destino');
            $table->datetime('hora_de_salida');
            $table->string('estado',25)->nullable();
            $table->integer('puestos_disponibles');
            $table->bigInteger('codigo_auto')->unsigned();
            $table->foreign('codigo_auto')->references('id_auto')->on('user_auto');
            $table->float('costo_de_puestos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_viaje');
    }
}
