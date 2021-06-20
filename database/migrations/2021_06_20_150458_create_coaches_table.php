<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {

            $table->increments('coach_Id')->start(1000)->nocache();
            $table->string('coach_name')->nullable();
            $table->string('coach_address')->nullable();
            $table->string('coach_university')->nullable();
            $table->string('coach_email')->nullable();
            $table->integer('coach_phone')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
}
