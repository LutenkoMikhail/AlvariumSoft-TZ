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
            $table->bigIncrements('id');
            $table->string('name', 50)->index();
            $table->string('surname', 50);
            $table->date('birthday');
            $table->string('position_employee', 50);
            $table->float('payment', 10, 2);
            $table->boolean('type_payment_employee');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

        });
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('cascade');
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
