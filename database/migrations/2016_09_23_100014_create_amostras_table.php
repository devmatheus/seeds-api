<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmostrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amostras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produtor_id')->unsigned();
            $table->foreign('produtor_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->integer('remetente_id');
            $table->foreign('remetente_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->integer('cultivar_id')->unsigned();
            $table->foreign('cultivar_id')->references('id')->on('cultivares')->onDelete('cascade');
            $table->integer('safra_id')->unsigned();
            $table->foreign('safra_id')->references('id')->on('peneiras')->onDelete('cascade');
            $table->integer('peneira_id');
            $table->foreign('peneira_id')->references('id')->on('peneiras')->onDelete('cascade');
            $table->string('tratamento');
            $table->string('representividade_sacas');
            $table->string('representividade_sacas_kg');
            $table->string('procedencia');
            $table->dateTime('data_carregamento');
            $table->dateTime('data_recebimento');
            $table->string('tipo')->default(0)->comment('0: Prévia 1: Definitiva');
            $table->longText('observacao');
            $table->integer('status');
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
        Schema::dropIfExists('amostras');
    }
}
