<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_objects', function (Blueprint $table) {
            $table->id();
            $table->decimal('stubbornness_sr',8,2);
             $table->decimal('stubbornness_nato',8,2);
             $table->decimal('defense_sr',8,2);
             $table->decimal('defense_nato',8,2);
             $table->decimal('hidden_sr',8,2);
             $table->decimal('hidden_nato',8,2);
             $table->decimal('position_sr',8,2);
             $table->decimal('position_nato',8,2);
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
        Schema::dropIfExists('main_objects');
    }
}
