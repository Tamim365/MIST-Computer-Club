<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCUSTOMERTable extends Migration
{
    public function up()
    {
        Schema::create('CUSTOMER', function (Blueprint $table) {
            $table->string('CUST_ID',12);
            $table->string('CUST_NAME',20);
            $table->date('CUST_DOB');
            $table->string('CUST_STREET',12);
            $table->string('CUST_CITY',12);

        });
    }

    public function down()
    {
        Schema::dropIfExists('CUSTOMER');
    }
}