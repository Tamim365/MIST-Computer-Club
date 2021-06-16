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
            $table->integer('Course_Id')->primary();
            $table->integer('Budget_Id');
            $table->string('Course_Name');
            $table->date('Start_Date');
            $table->date('End_Date')->nullable();
            $table->text('Course_info');
            $table->string('Course_status');
            $table->integer('Course_Rating');
            $table->integer('Mentor_Rating');
            $table->text('Additional_Feedback')->nullable();
            $table->integer('Mentor_Fee');
            $table->integer('Course_materialsFee');


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
