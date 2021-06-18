<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClubBudgets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_budgets', function (Blueprint $table) {
            $table->increments('Budget_Id');
            $table->string('Budget_Amount')->nullable();
            $table->string('Budget_Remain')->nullable();
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
       Schema::dropIfExists('courses');
    }
}
