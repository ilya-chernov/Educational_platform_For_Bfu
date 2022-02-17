<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->integer('organizationID')->default('0001');
            $table->integer('instituteID')->default('1');
            $table->integer('specializationID')->default('1');
            $table->integer('YearNum')->default('1');
            $table->integer('groupID')->default('1');
            $table->integer('dayOfWeek');
            $table->integer('lessonNum');
            $table->string('StartTime');
            $table->string('FinishTime');
            $table->string('lesson');
            $table->integer('typeOfLesson')->default('1'); // 1 - Лекция, 2 - практическое
            $table->string('teacher')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
