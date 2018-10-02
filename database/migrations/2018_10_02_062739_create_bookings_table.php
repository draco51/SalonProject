<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('bookingId');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description');
            $table->boolean('booking_status'); // Freelancer confirmed or not
            $table->integer('total_cost');
            $table->smallInteger('tax'); // % tax value

            $table->unsignedInteger('Fid');
            $table->foreign('Fid')->references('freelancerId')->on('freelancer_profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
