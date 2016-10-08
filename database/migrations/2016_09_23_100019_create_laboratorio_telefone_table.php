<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratorioTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio_telefone', function (Blueprint $table) {
            $table->integer('laboratorio_id')->unsigned();
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios')->onDelete('cascade');
            $table->integer('telefone_id')->unsigned();
            $table->foreign('telefone_id')->references('id')->on('telefones')->onDelete('cascade');
            $table->nullableTimestamps();
            $table->index(['laboratorio_id', 'telefone_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratorio_telefone');
    }
}
