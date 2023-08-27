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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->decimal('total_amount',9,2);
            $table->decimal('total_discount',9,2);
            $table->string('status');
            $table->date('order_time');
            $table->date('posted_time');
            $table->date('arrived_time');
            $table->string('order_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
