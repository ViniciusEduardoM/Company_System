<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependantEmployeeTable extends Migration
{

    public function up()
    {
        Schema::create('dependant_employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dependant_id');
            $table->foreign('dependant_id')->references('id')->on('dependants')->onDelete('cascade');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependant_employee');
    }
}
