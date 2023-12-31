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
        Schema::create('estate_oil_storages', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('area_mm');
            $table->string('location');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('oil_total_valume');
            $table->string('oil_remain_valume')->nullable();            
            $table->string('contract_img');
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
        Schema::dropIfExists('estate_oil_storages');
    }
};
