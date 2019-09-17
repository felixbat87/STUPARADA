<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEnlaceViaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_enlace_viaje', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('codigo_viaje')->unsigned();
            $table->foreign('codigo_viaje')->references('id_viaje')->on('tbl_viaje');
            $table->bigInteger('codigo_user_sin_auto')->unsigned();
            $table->foreign('codigo_user_sin_auto')->references('id_usuario')->on('tbl_usuario_sin_auto');
            $table->string('estado',25)->nullable();
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
        Schema::dropIfExists('tbl_enlace_viaje');
    }
}
