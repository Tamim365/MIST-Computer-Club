<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRNDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_n_d_s', function (Blueprint $table) {
            $table->increments('project_id')->start(1000)->nocache();
            $table->integer('budget_id')->nullable();
            $table->string('project_title')->nullable();
            $table->integer('project_equipment')->nullable()->default(0);
            $table->integer('project_labor')->nullable()->default(0);;
            $table->integer('project_management')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_n_d_s');
    }
}
