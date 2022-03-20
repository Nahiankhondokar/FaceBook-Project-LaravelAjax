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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('Sname')->nullable();
            $table->string('edu')->nullable();
            $table->string('job')->nullable();
            $table->string('relation')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('gender')->nullable();
            $table->integer('dob')->nullable();
            $table->string('bio')->nullable();
            $table->string('pphoto')->nullable();
            $table->string('cphoto')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
