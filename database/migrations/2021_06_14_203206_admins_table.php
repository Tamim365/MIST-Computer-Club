<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('Admin_Id')->primary();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone_No')->nullable();
            $table->string('Access_Time')->nullable();
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('admins'); 
    }
}
