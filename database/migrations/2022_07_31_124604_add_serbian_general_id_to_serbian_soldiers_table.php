<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSerbianGeneralIdToSerbianSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serbian_soldiers', function (Blueprint $table) {
            $table->unsignedBigInteger('serbian_general_id');

            $table->foreign('serbian_general_id')->references('id')->on('serbian_general');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('serbian_soldiers', function (Blueprint $table) {
            //
        });
    }
}
