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
        Schema::create('logistic_mang_reports', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->string('task_details');
            $table->string("related_office");
            $table->string('date');
            $table->string('state');
            $table->string("file");
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
        Schema::dropIfExists('logistic_mang_reports');
    }
};