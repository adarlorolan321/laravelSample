<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
          
            $table->string('birthdate');
            $table->integer('age');   
            $table->string('sex');
            $table->string('address');
            $table->string('employedDate');
            //$table->string('supervisor_Id');
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('position_id')->unsigned();
            $table->timestamps();
           

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('position_id')->references('id')->on('positions');
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
};
