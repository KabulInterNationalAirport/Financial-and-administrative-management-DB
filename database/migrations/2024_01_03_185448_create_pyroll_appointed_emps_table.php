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
        Schema::create('pyroll_appointed_emps', function (Blueprint $table) {
            $table->id();
            $table->string('en_name');
            $table->string('ps_name');
            $table->string('en_last_name')->nullable();
            $table->string('ps_last_name');
            $table->string('en_father_name');
            $table->string('ps_father_name');
            $table->string('birth_date');
            $table->string("appointment_date");
            $table->string('position_no');
            $table->string('degree');
            $table->string("bank_card");
            $table->string("phone");
            $table->string('employee_doc')->nullable();
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
        Schema::dropIfExists('pyroll_appointed_emps');
    }
};
