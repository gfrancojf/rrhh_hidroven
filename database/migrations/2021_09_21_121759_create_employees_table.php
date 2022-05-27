<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('files')->nullable();
            $table->string('dni')->unique();
            $table->string('first_lastname', 100);
            $table->string('second_lastname', 100)->nullable();
            $table->date('birthday');
            $table->string('email')->unique()->nullable();
            $table->char('gender',1);
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->date('date_of_admission');
            $table->date('date_of_egress')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('branches');
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
        Schema::dropIfExists('employees');
    }
}
