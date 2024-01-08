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
        Schema::create('estate_oil_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('date');
            $table->string('car_numebr');
            $table->string('oil_total_valume');
            $table->string('follow_person');
            $table->string('inquiry_img');
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
        Schema::dropIfExists('estate_oil_inquiries');
    }
};
