<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fests', function (Blueprint $table) {
            $table->increments('Fest_Id')->start(1000)->nocache();
            $table->unsignedBigInteger('budget_id')->nullable();
            $table->foreign('budget_id')->references('budget_id')->on('budgets')->onUpdate('cascade')->onDelete('cascade');
            $table->date('Fest_Date')->nullable();
            $table->string('Fest_Title')->nullable();
            $table->text('Fest_Description')->nullable();
            $table->integer('Fest_expenses')->nullable();
            $table->string('picture')->default('/default_user_img.png');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fests');
    }
}
