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
            $table->unsignedBigInteger('OfficesCode');
            $table->id();
            $table->integer('ReportsTo');
            $table->string('lastName');
            $table->string('FirstName');
            $table->string('Extension');
            $table->string('Email');
            $table->string('JopTitle');
            $table->timestamps();

            $table->foreign('officesCode')->references('Code')->on('offices');
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
