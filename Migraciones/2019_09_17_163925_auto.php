<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Auto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_auto');
            $table->string('placa_image',250);
            $table->string('image_auto',250);
            $table->string('seguro_image',250);
            $table->string('mes',2);
            $table->string('anno',4);
            $table->string('estado',25)->nullable();
            $table->bigInteger('codigo_tipo')->unsigned();
            $table->foreign('codigo_tipo')->references('id')->on('tbl_tipo');
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
        Schema::dropIfExists('auto');
    }
}
