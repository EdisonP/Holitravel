<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->bigIncrements('travelID');
            $table->timestamps();
            $table->string('toDest');      
            $table->string('fromDest'); 
            $table->integer('child'); 
            $table->integer('adult'); 
            $table->integer('elderly'); 
            $table->date('dateOfFlight'); 
            $table->boolean('status'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
