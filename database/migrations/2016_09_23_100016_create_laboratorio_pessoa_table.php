<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratorioPessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio_pessoa', function (Blueprint $table) {
            $table->integer('laboratorio_id')->unsigned();
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios')->onDelete('cascade');
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->nullableTimestamps();
            $table->index(['laboratorio_id', 'pessoa_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratorio_pessoa');
    }
}
