<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidade', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('valor');
            $table->string('periodo');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('curso');
            $table->timestamps();
            /*
              curso_ead,curso_semi-presencial curso_presencial
              insert into curso_presencial(perido,'manha')

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidade');
    }
}
