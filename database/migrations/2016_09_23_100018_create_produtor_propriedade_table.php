<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorPropriedadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtor_propriedade', function (Blueprint $table) {
            $table->integer('produtor_id')->unsigned();
            $table->foreign('produtor_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->integer('propriedade_id')->unsigned();
            $table->foreign('propriedade_id')->references('id')->on('propriedades')->onDelete('cascade');
            $table->nullableTimestamps();
            $table->index(['produtor_id', 'propriedade_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_propriedade');
    }
}
