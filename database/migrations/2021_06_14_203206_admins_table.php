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
            $table->increments('Admin_Id');
            $table->string('Admin_Name');
            $table->string('Admin_Email')->unique();
            $table->string('Admin_Password');
            $table->string('Admin_Phone')->nullable();
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
