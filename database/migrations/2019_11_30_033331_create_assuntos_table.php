<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assuntos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assunto_pai_id')->nullable();
            $table->string('nome');
            $table->string('ordem');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('assunto_pai_id')->references('id')->on('assuntos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assuntos');
    }
}
