<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('especie_id')->unsigned();
            $table->foreign('especie_id')->references('id')->on('especies')->onDelete('cascade');
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
        Schema::dropIfExists('cultivares');
    }
}
