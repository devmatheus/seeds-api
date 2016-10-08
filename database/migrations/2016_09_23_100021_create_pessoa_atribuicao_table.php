<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaAtribuicaoTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_atribuicao', function (Blueprint $table) {
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->integer('atribuicao_id')->unsigned();
            $table->foreign('atribuicao_id')->references('id')->on('atribuicoes')->onDelete('cascade');
            $table->nullableTimestamps();
            $table->index(['pessoa_id', 'atribuicao_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_atribuicao');
    }
}
