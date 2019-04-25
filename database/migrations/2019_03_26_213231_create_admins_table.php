<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('admins')->insert(
            array(
                'name'=>'shawki',
                'email' => 'shawki.alasy5@gmail.com',
                'password'=>Hash::make('Shawki98'),
            ));
         DB::table('admins')->insert(
            array(
                'name'=>'hamza',
                'email' => 'hamza.mashriqi999@gmail.com',
                'password'=>Hash::make('12345678'),
            ));
         DB::table('admins')->insert(
            array(
                'name'=>'mahmoud',
                'email' => 'mahmoud.alhussainey@gmail.com',
                'password'=>Hash::make('12345678'),
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
