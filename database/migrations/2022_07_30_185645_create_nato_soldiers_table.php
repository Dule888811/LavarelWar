<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNatoSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nato_soldiers', function (Blueprint $table) {
            $table->id();
            $table->boolean('general')->default(false);
            $table->decimal('equipment',8,2);
            $table->decimal('efficiency',8,2);
            $table->decimal('courage',8,2);
            $table->decimal('knowledge-of-the-terrain',8,2);
            $table->boolean('Albanian');
            $table->boolean('wicked')->default(true);
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
        Schema::dropIfExists('nato_soldiers');
    }
}
