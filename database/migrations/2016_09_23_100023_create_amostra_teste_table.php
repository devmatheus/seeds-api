<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmostraTesteTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amostra_teste', function (Blueprint $table) {
            $table->integer('amostra_id')->unsigned();
            $table->foreign('amostra_id')->references('id')->on('amostras')->onDelete('cascade');
            $table->integer('teste_id')->unsigned();
            $table->foreign('teste_id')->references('id')->on('testes')->onDelete('cascade');
            $table->nullableTimestamps();
            $table->index(['amostra_id', 'teste_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amostra_teste');
    }
}
