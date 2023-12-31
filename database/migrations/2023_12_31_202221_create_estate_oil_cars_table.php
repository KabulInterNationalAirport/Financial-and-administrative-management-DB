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
        Schema::create('estate_oil_cars', function (Blueprint $table) {
            $table->id();
            $table->string('driver');
            $table->string('father_name');
            $table->string('id_card');
            $table->string('vehicale_no');
            $table->string('oil_total_valume');
            $table->unsignedBigInteger("estate_oil_storages_id");
            $table->foreign("estate_oil_storages_id")->references("id")->on("estate_oil_storages")->onDelete("cascade");
            $table->unsignedBigInteger("estate_oil_inquiries_id");
            $table->foreign("estate_oil_inquiries_id")->references("id")->on("estate_oil_inquiries")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate_oil_cars');
    }
};
