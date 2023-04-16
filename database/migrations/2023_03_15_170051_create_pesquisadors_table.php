<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesquisadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesquisadors', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('nome');
            $table->string('referencia')->nullable();
            $table->string('link_lattes')->nullable();
            $table->string('link_orcid')->nullable();
            $table->text('descricao');
            $table->string('imagem');
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
        Schema::dropIfExists('pesquisadors');
    }
}
