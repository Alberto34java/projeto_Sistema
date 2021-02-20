<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {

            /*
             id,nome,duracao,descricao,id_formacao

            */
            $table->id();
            $table->string('nome');
            $table->string('desricao');
            $table->string('duracao');
            $table->unsignedBigInteger('formacao_id');
            $table->foreign('formacao_id')->references('id')->on('formacao');

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
        Schema::dropIfExists('curso');
    }
}
