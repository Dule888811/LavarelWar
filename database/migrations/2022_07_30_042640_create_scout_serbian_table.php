<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoutSerbianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scout_serbians', function (Blueprint $table) {
            $table->id();
            $table->decimal('hiding',8,2);
            $table->decimal('night-vision',8,2);
            $table->decimal('knowledge-of-the-terrain',8,2);
            $table->decimal('equipment',8,2);
            $table->decimal('survival-in-the-jungle',8,2);
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
        Schema::dropIfExists('scout_serbian');
    }
}
