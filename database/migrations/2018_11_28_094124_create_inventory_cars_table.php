<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('engine_no');
            $table->string('chasis_no');
            $table->unsignedInteger('car_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('customer_id')->nullable();
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_cars');
    }
}
