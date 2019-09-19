<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_auto');
            $table->string('placa_image',250);
            $table->string('image_auto',250);
            $table->string('seguro_image',250);
            $table->string('mes',2);
            $table->string('year',4);
            $table->string('estado',25)->nullable();
            $table->bigInteger('codigo_usuario')->unsigned();
            $table->foreign('codigo_usuario')->references('id_usuario')->on('tbl_usuario_con_auto');
            $table->bigInteger('codigo_tipo')->unsigned();
            $table->foreign('codigo_tipo')->references('id')->on('tbl_tipo_auto');
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
        Schema::dropIfExists('tbl_auto');
    }
}
