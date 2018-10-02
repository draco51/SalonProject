<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_profiles', function (Blueprint $table) {
            $table->increments('freelancerId');
            $table->string('location');
            $table->bigInteger('hour_Rate');
            $table->text('description');
            $table->string('profile_title');
            $table->integer('rating');

            $table->unsignedInteger('Uid');
            $table->foreign('Uid')->references('userId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freelancer_profiles');
    }
}
