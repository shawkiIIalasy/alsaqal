<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservehotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservehotel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price');
            $table->integer('hotelcompany_id');
            $table->integer('admin_id');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('adult');
            $table->integer('children');
            $table->integer('rooms');
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
       Schema::dropIfExists('reservehotel');
    }
}
