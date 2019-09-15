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
        Schema::create('user_auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_auto');
            $table->bigInteger('codigo_usuario')->unsigned();
            $table->foreign('codigo_usuario')->references('id_usuario')->on('tbl_usuario_con_auto');
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
        Schema::dropIfExists('user_auto');
    }
}
