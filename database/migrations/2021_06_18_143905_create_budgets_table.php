<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('Budget_Id');
            $table->integer('Budget_Amount')->nullable();
            $table->integer('Budget_Remain')->nullable()->default(0);
            $table->string('Budget_Proposal_Info')->nullable();
            $table->date('Budget_Transaction_Date')->nullable();
            $table->string('Remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
