<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name',50);
            $table->string('email',50)->unique();;
            $table->string('phone',20);
            $table->string('address',20);
            $table->string('sex',5);
            $table->string('nrc',20);
            $table->string('salary_scale',20);
            $table->int('max_advance',11);
            $table->string('contract_type',20);
            $table->date('pay_day');
            $table->string('employee_number',20);
            $table->integer('company_id',11);
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
