<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('Club_Id');
            $table->string('Name');
            $table->string('Student_Id');
            $table->string('Department')->nullable();
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone_No')->nullable();
        });
        Schema::table('members', function (Blueprint $table) {
            $table->string('');
            $table->string('Address.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
