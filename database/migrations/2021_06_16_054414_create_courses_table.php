<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('Course_Id');
            $table->integer('Budget_Id')->nullable();
            $table->string('Course_Name')->nullable();
            $table->date('Start_Date')->nullable();
            $table->date('End_Date')->nullable();
            $table->text('Course_info')->nullable();
            $table->string('Course_status')->nullable();
            $table->integer('CourseRating')->nullable();
            $table->integer('MentorRating')->nullable();
            $table->text('Additional_Feedback')->nullable();
            $table->integer('Mentor_Fee')->nullable();
            $table->integer('Course_materialsFee')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
