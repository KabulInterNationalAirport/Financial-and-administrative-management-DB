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
        Schema::create('estate_commercial_areas', function (Blueprint $table) {
            $table->id();
            $table->string('contract_person');
            $table->string('monthly_rent');
            $table->string('area_mm');
            $table->string('location');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('contract_details');
            $table->string('activity_form');            
            $table->string('state');
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
        Schema::dropIfExists('estate_commercial_areas');
    }
};
