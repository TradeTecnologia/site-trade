<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_bancarios', function (Blueprint $table) {
            $table->bigIncrements('IDDADO');
            $table->integer('USUARIOID');
            $table->integer('BANCOID');
            $table->string('OPERACAO');
            $table->string('AGENCIA');
            $table->string('CONTA');
            $table->string('DIGVER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_bancarios');
    }
}
