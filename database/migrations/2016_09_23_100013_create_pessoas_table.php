<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('sexo');
            $table->string('cpf')->unique();
            $table->string('rg');
            $table->string('data_nascimento');
            $table->string('email');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            $table->string('crea');
            $table->string('renasem');
            $table->string('cnpj')->unique();
            $table->string('inscricao_estadual');
            $table->string('inscricao_municipal');
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('cargo');
            $table->string('setor');
            $table->string('ramo');
            $table->enum('newsletter', [true, false])->default(true);
            $table->longText('notas');
            $table->string('tipo')->default(0)->comment('0: Fisíca 1: Júridica');
            $table->integer('status')->default(1)->comment('0: Inativo 1: Ativo');
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
        Schema::dropIfExists('pessoas');
    }
}
