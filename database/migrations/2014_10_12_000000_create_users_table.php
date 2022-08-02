<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('uniqueid');
            $table->string('admin_id')->nullable();
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('title');
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername');
            $table->string('sex');
            $table->string('soo');
            $table->string('locgov');
            $table->string('sor');
            $table->string('lor');
            $table->string('address');
            $table->string('dob');
            $table->string('occupation')->nullable();
            $table->string('profileimg')->nullable();
            $table->string('role')->nullable();
            $table->string('gen_tickets')->nullable();
            $table->string('unpaid_ticket')->nullable();
            $table->string('active_ticket')->nullable();
            $table->rememberToken();
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
