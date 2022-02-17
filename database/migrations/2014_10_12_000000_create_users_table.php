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
            $table->string('sname')->nullable();
            $table->string('surname');
            $table->integer('organizationID')->nullable();
            $table->integer('instituteID')->nullable();
            $table->integer('SpecializationID')->nullable();
            $table->integer('courseID')->nullable();
            $table->integer('subgroup')->nullable();
            $table->string('email')->unique();
            $table->string('pemail');
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
