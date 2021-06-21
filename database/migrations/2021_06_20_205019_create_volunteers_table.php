<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('volunteer_id')->start(1000)->nocache();
            $table->string('volunteer_name')->nullable();
            $table->string('volunteer_address')->nullable();
            $table->string('volunteer_Dept')->nullable();
            $table->integer('volunteer_Level')->nullable();
            $table->string('volunteer_email')->nullable();
            $table->string('volunteer_role')->nullable();
            $table->integer('volunteer_phone')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
