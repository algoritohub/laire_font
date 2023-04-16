<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->id();
            $table->integer('pagina');
            $table->integer('bloco');
            $table->integer('posicao');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->text('texto')->nullable();
            $table->string('imagem')->nullable();
            $table->integer('publicador');
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
        Schema::dropIfExists('conteudos');
    }
}
