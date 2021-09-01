<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CargouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cargou', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iduser')->unsigned(); ;
            $table->integer('idcargo')->unsigned(); ;
            $table->foreign('iduser')->references('id')->on('usuarios');
            $table->foreign('idcargo')->references('id')->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('cargou');
    }
}
