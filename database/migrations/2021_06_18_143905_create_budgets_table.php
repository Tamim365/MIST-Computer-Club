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
            $table->increments('Budget_Id')->start(1000)->nocache();
            $table->integer('Budget_Amount')->nullable();
            $table->string('Budget_Proposal_Info')->nullable();
            $table->date('Budget_Transaction_Date')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('Budget_Status')->nullable()->default('Pending');
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
