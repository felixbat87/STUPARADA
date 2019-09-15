<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDestino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_destino', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_destino');
            $table->string('nombre_destino',255);
            $table->integer('codigo_sede');
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
        Schema::dropIfExists('tbl_destino');
    }
}
