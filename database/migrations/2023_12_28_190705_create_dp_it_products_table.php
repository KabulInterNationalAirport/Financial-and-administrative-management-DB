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
        Schema::create('dp_it_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('quantity');
            $table->string("unit");
            $table->string('price');
            $table->string("serial_no");
            $table->string("ram");           
            $table->string('hd');
            $table->unsignedBigInteger("trustee_id");
            $table->foreign("trustee_id")->references("id")->on("trustee_dps")->onDelete("cascade");
            $table->unsignedBigInteger("total_products_id");
            $table->foreign("total_products_id")->references("id")->on("total_product_dps")->onDelete("cascade");
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
        Schema::dropIfExists('dp_it_products');
    }
};
