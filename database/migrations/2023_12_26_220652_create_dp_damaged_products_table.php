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
        Schema::create('dp_damaged_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('quantity');
            $table->string("unit");
            $table->string('price');
            $table->string('delivered_emp')->nullable();
            $table->string('related_office');
            $table->unsignedBigInteger("trustee_id");
            $table->foreign("trustee_id")->references("id")->on("trustee_dps")->onDelete("cascade");
            $table->unsignedBigInteger("org_stuff_dp_id");
            $table->foreign("org_stuff_dp_id")->references("id")->on("org_stuff_dps")->onDelete("cascade");
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
        Schema::dropIfExists('dp_damaged_products');
    }
};
