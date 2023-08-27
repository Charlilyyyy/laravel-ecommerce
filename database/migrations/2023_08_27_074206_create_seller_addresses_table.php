<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seller_addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->string('unit_no');
            $table->string('street');
            $table->string('city');
            $table->integer('postal_code');
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_addresses');
    }
};
