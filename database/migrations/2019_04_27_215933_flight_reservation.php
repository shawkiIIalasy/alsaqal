<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlightReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightreservation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('reserveflight_id');
            $table->integer('user_id');
            $table->string('class');
            $table->integer('adult');
            $table->integer('children');
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
        Schema::dropIfExists('flightreservation');
    }
}
