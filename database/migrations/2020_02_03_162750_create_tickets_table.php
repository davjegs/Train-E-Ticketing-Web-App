<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket_id');
            $table->string('uniqueid');
            $table->string('payment_status');
            $table->string('active_status');
            $table->string('boarding_station');
            $table->string('destination_station');
            $table->string('usage_date');
            $table->string('ticket_type');
            $table->string('ticket_duration');
            $table->string('number_of_passenger');
            $table->string('luggage');
            $table->string('luggage_weight')->nullable;
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
        Schema::dropIfExists('tickets');
    }
}
