<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUsuarioSinAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario_sin_auto', function (Blueprint $table) {//vali
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_usuario');
            $table->string('nombre',250);
            $table->string('apellido',250);
            $table->string('cedula',25);
            $table->string('celular',25);
            $table->string('perfil_image',250);
            $table->string('estado',25)->nullable();
            $table->string('captura_matricula',250);
            $table->bigInteger('id_centro');
            $table->bigInteger('id_registro')->unsigned();
            $table->foreign('id_registro')->references('id')->on('tbl_registro');
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
        Schema::dropIfExists('tbl_usuario_sin_auto');
    }
}
