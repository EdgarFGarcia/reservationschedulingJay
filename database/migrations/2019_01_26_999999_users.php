<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fname'); //varchar (255)
            $table->string('mname'); //varchar (255)
            $table->string('lname'); //varchar (255)

            $table->string('password'); //varchar (255)

            $table->string('password2');

            $table->tinyInteger('is_active')->default(1);

            $table->unsignedInteger('position_id');
            $table->foreign('position_id')->references('id')->on('positions');

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
        Schema::dropIfExists('users');
    }
}
