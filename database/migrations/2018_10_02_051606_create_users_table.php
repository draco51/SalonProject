<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('email');
            $table->string('userName');
            $table->string('fName');
            $table->string('lName');
            $table->string('password');
            $table->date('DOB');
            $table->string('address');
            $table->boolean('accStatus');
            $table->string('picURL');
            $table->string('phoneNum');
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
