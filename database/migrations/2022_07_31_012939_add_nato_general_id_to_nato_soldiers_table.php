<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNatoGeneralIdToNatoSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nato_soldiers', function (Blueprint $table) {
            $table->unsignedBigInteger('nato_general_id');

            $table->foreign('nato_general_id')->references('id')->on('nato_generals');

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
        Schema::table('nato_soldiers', function (Blueprint $table) {
            $table->dropForeign('nato_generals
            _id');
        });
    }
}
