<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposEngConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conteudos', function (Blueprint $table) {
            $table->string('titulo_eng')->nullable();
            $table->string('subtitulo_eng')->nullable();
            $table->text('texto_eng')->nullable();
            $table->text('texto2_eng')->nullable();
            $table->text('texto3_eng')->nullable();
            $table->text('texto4_eng')->nullable();
            $table->text('texto5_eng')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conteudos', function (Blueprint $table) {
            $table->dropColumn('titulo_eng');
            $table->dropColumn('subtitulo_eng');
            $table->dropColumn('texto_eng');
            $table->dropColumn('texto2_eng');
            $table->dropColumn('texto3_eng');
            $table->dropColumn('texto4_eng');
            $table->dropColumn('texto5_eng');
        });
    }
}
