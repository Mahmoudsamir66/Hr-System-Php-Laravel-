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
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('date')->nullable();
            $table->date('dateOfContract')->nullable();
            $table->string('type')->nullable();
            $table->time('startTime')->nullable();
            $table->time('endTime')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('nationalId')->nullable();
            $table->string('salaryHour')->nullable();
            $table->string('nationality')->nullable();
            $table->string('file')->nullable();


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
};
