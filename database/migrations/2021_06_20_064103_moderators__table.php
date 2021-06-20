<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModeratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moderators', function (Blueprint $table) {
            $table->string('Faculty_Id')->primary();
            $table->string('Name');
            $table->string('Department');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone_No')->nullable();
            $table->string('Address')->nullable();
            $table->string('picture')->default('/default_user_img.png');
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
        Schema::dropIfExists('moderators');
    }
}
