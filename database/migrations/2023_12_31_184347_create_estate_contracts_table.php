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
        Schema::create('estate_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contract');
            $table->string('contract_no');
            $table->string('contract_reason');
            $table->string('contract_details');
            $table->string('company');
            $table->string("executer_num");
            $table->string('start_date');
            $table->string('end_date');
            $table->string('state');
            $table->string('contract_img');
            $table->string('area_mm');
            $table->string('location');
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
        Schema::dropIfExists('estate_contracts');
    }
};
