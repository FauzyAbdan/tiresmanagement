<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTireCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tire_codes', function (Blueprint $table) {
            $table->id();
            //I think I can't put unique parameter here for tire_codes name column
            $table->string('name');
            //the uniqueness of tire_codes name values based on tire_type_id
            $table->foreignId('tire_type_id')->references('id')->on('tire_types');
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
        Schema::dropIfExists('tire_codes');
    }
}
