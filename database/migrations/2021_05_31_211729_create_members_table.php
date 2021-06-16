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
            $table->integer('Faculty_Id')->nullable();
            $table->string('Name');
            $table->string('Student_Id');
            $table->string('Department')->nullable();
            $table->integer('Level')->nullable();
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone_No')->nullable();
            $table->string('Address')->nullable();
            $table->string('picture')->default('/default_user_img.png');
            $table->string('panel_role')->nullable();
            $table->string('committe_name')->nullable();
            $table->string('dob')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
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
