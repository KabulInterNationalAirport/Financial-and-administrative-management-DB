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
        Schema::create('total_product_dps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string("quantity");
            $table->string('unit');
            $table->string('remain_products');
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
        Schema::dropIfExists('total_product_dps');
    }
};
