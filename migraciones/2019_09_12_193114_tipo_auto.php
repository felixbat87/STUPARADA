<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_type', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->bigIncrements('id');
            $table->string('descripcion',250);
            $table->integer('puestos');
            $table->bigInteger('codigo_tipo')->unsigned();
            $table->foreign('codigo_tipo')->references('id_tipo')->on('tbl_auto');
           
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
        Schema::dropIfExists('tbl_type');
    }
}
