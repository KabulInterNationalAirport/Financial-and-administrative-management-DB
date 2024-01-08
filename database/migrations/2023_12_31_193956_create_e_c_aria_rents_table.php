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
        Schema::create('e_c_aria_rents', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('month');
            $table->string('status');
            $table->unsignedBigInteger("ECommercialArea_id");
            $table->foreign("ECommercialArea_id")->references("id")->on("estate_commercial_areas")->onDelete("cascade");
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
        Schema::dropIfExists('e_c_aria_rents');
    }
};