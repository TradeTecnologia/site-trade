<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacoes', function (Blueprint $table) {
            $table->bigIncrements('IDTRANSACAO');
            $table->integer('USUARIOID');
            $table->integer('CLIENTEID');
            $table->dateTime('DATATRANSACAO');
            $table->char('TIPOTRANSACAO');
            $table->decimal('VALORTRANSACAO');
            $table->char('STATUSTRANSACAO');
            $table->decimal('COMISSAO');
            $table->dateTime('ULTIMAMODIFICACAO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacoes');
    }
}
