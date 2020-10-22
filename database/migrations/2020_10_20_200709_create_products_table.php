<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('Cod');
            $table->integer('ProductLineId');
            $table->string('Name');
            $table->integer('Scale');
            $table->integer('Vendor');
            $table->integer('PdtDescription');
            $table->string('QtyLnStock');
            $table->decimal('BuyPrice', 19, 0);
            $table->string('Msrp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
