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
        Schema::create('officers_appointed_emps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('father_name');
            $table->string('birth_date')->nullable();;
            $table->string("appointment_date");
            $table->string('position_no');
            $table->string('degree')->nullable();
            $table->string("bank_card")->nullable();
            $table->string("phone")->nullable();
            $table->string("state");
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
        Schema::dropIfExists('officers_appointed_emps');
    }
};
