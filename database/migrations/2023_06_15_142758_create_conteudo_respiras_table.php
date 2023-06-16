<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConteudoRespirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudo_respiras', function (Blueprint $table) {
            $table->id();
            $table->integer('projeto');
            $table->integer('posicao');
            $table->string('titulo');
            $table->text('descricao');
            $table->string('imagem');
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('titulo_ing')->nullable();
            $table->text('descricao_ing')->nullable();
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
        Schema::dropIfExists('conteudo_respiras');
    }
}
