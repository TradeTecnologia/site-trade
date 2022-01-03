<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('IDUSUARIO');
            $table->string('NOMEUSUARIO');
            $table->string('CPFUSUARIO')->unique();
            $table->string('EMAILUSUARIO')->unique();
            $table->string('RGUSUARIO');
            $table->dateTime('NASCIMENTOUSUARIO');
            $table->string('ENDERECOUSUARIO');
            $table->string('TELEFONEUSUARIO');
            $table->string('CELULARUSUARIO');
            $table->string('SENHAUSUARIO');
            $table->string('NATURALIDADE');
            $table->string('NOMEDAMAE');
            $table->string('NOMEDOPAI');
            $table->string('OBSERVACOES');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
