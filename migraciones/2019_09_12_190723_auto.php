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
        Schema::create('tbl_auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_tipo');
            $table->string('placa_image',250);
            $table->string('image_auto',250);
            $table->string('seguro_image',250);
            $table->string('mes',100);
            $table->string('anno',100);
            $table->string('estado',25)->nullable();
            $table->bigInteger('codigo_auto')->unsigned();
            $table->foreign('codigo_auto')->references('id_auto')->on('user_auto');
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
