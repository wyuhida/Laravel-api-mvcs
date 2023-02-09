<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_courses_enrollments', function (Blueprint $table) {
           $table->id();
           $table->bigInteger('courses_id')->unsigned();
           $table->bigInteger('students_id')->unsigned();
           $table->bigInteger('enrolled_by_user_id')->unsigned();
           $table->softDeletes();
           $table->timestamps();

           $table->foreign('courses_id')->references('id')->on('courses');
           $table->foreign('students_id')->references('id')->on('students');
           $table->foreign('enrolled_by_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_courses_enrollments');

    }
};
