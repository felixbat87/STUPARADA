<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AutoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_usuario', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('codigo_usuario')->unsigned();
            $table->foreign('codigo_usuario')->references('id_usuario')->on('tbl_usuario_con_auto');
            $table->bigInteger('codigo_auto')->unsigned();
            $table->foreign('codigo_auto')->references('id_auto')->on('auto');
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
        Schema::dropIfExists('auto_usuario');
    }
}
