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
        Schema::create('pyroll_budget_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('month');
            $table->string('amount');
            $table->string('based_on');
            $table->string("number");
            $table->string("received_type");
            $table->string("date");
            $table->unsignedBigInteger("project_codes_id");
            $table->foreign("project_codes_id")->references("id")->on("project_codes")->onDelete("cascade");
            $table->unsignedBigInteger("expense_codes_id");
            $table->foreign("expense_codes_id")->references("id")->on("expense_codes")->onDelete("cascade");
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
        Schema::dropIfExists('pyroll_budget_expenses');
    }
};
