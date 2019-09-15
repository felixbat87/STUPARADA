<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioConAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario_con_auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_usuario');
            $table->string('nombre',250);
            $table->string('apellido',250);
            $table->string('cedula',25);
            $table->string('celular',25); 
            $table->string('perfil_image',250);
            $table->string('licencia_image',250);
            $table->string('fecha_expedida',100);
            $table->string('fecha_expiracion',100);
            $table->string('estado',25)->nullable();
            $table->integer('id_centro');
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
        Schema::dropIfExists('tbl_usuario_con_auto');
    }
}
