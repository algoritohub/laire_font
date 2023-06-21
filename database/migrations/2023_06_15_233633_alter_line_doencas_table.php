<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLineDoencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doencas', function (Blueprint $table) {
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->dropColumn('publicador');
            $table->dropColumn('registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doencas', function (Blueprint $table) {
            //
        });
    }
}
