<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->unsignedBigInteger('assunto_id');
            $table->unsignedBigInteger('banca_id');
            $table->unsignedBigInteger('orgao_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('assunto_id')->references('id')->on('assuntos');
            $table->foreign('banca_id')->references('id')->on('bancas');
            $table->foreign('orgao_id')->references('id')->on('orgaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questaos');
    }
}
