<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_contests', function (Blueprint $table) {
            $table->unsignedBigInteger('team_Id');
            $table->foreign('team_Id')->references('team_Id')->on('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->string('contest_name');
            $table->foreign('contest_name')->references('contest_name')->on('contests')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_contests');
    }
}
