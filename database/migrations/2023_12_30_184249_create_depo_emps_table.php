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
        Schema::create('depo_emps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string("related_office");
            $table->string('job_title');
            $table->string('id_card');
            $table->string("appointment_date");
            $table->string("profil_pic")->nullable();
            $table->string('degree');
            $table->string("degree_pics")->nullable();
            $table->string("phone");
            $table->string('material_state')->nullable();
            $table->string("gender");
            $table->string("address")->nullable();
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
        Schema::dropIfExists('depo_emps');
    }
};
