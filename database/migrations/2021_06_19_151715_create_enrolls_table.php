<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {

            $table->unsignedBigInteger('club_Id');
            $table->foreign('club_Id')->references('club_id')->on('members')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('course_ID');
            $table->foreign('course_ID')->references('course_id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('participation_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolls');
    }
}
