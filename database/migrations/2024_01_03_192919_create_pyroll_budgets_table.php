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
        Schema::create('pyroll_budgets', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('month');
            $table->string('budget_type');
            $table->string("budget_name");
            $table->string('amount');
            $table->string("date");
            $table->unsignedBigInteger("project_codes_id");
            $table->foreign("project_codes_id")->references("id")->on("project_codes")->onDelete("cascade");
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
        Schema::dropIfExists('pyroll_budgets');
    }
};
