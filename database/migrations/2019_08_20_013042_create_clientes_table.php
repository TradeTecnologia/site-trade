<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('idcliente');
            $table->string('nomecliente');
            $table->string('telefonecliente');
            $table->string('telefonecliente2');
            $table->string('cpfcliente');
            $table->string('enderecocliente');
            $table->string('emailcliente');
            $table->string('observacoescliente');
            $table->string('rgcliente');
            $table->string('naturalidade');
            $table->string('nomedamae');
            $table->string('nomedopai');
            $table->dateTime('datanascimento');
            $table->decimal('salario');
            $table->string('clientestatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
