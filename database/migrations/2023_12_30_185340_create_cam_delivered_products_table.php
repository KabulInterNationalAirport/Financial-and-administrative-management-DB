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
        Schema::create('cam_delivered_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('quantity');
            $table->string("unit");
            $table->string('price');
            $table->string("based_on");
            $table->string("file");
            $table->string("number");
            $table->string("order_date");
            $table->string("order_office");
            $table->string("delivered_date");
            $table->unsignedBigInteger("total_products_id");
            $table->foreign("total_products_id")->references("id")->on("total_product_dps")->onDelete("cascade");
            $table->unsignedBigInteger("cam_org_stuff_id");
            $table->foreign("cam_org_stuff_id")->references("id")->on("cam_org_stuffs")->onDelete("cascade");
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
        Schema::dropIfExists('cam_delivered_products');
    }
};
