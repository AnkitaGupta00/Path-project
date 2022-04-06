<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employee_tasks', function (Blueprint $table) {
            $table->id();
        $table->bigInteger('employee_id')->unsigned();
        $table->bigInteger('task_id')->unsigned();
        $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
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
        //
    }
}
