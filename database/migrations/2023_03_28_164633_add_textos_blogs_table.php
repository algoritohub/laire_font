<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTextosBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('texto2')->nullable();
            $table->text('texto3')->nullable();
            $table->text('texto4')->nullable();
            $table->text('texto5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('texto2');
            $table->dropColumn('texto3');
            $table->dropColumn('texto4');
            $table->dropColumn('texto5');
        });
    }
}
