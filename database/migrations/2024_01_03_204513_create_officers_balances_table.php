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
        Schema::create('officers_balances', function (Blueprint $table) {
            $table->id();
            $table->string('balance_name');
            $table->string('total_days');
            $table->string('remain_days');
            $table->string('used_days');
            $table->unsignedBigInteger("officers_appointed_emps_id");
            $table->foreign("officers_appointed_emps_id")->references("id")->on("officers_appointed_emps")->onDelete("cascade");
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
        Schema::dropIfExists('officers_balances');
    }
};
