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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->string('name');
            $table->string('description');
            $table->decimal('price',9,2);
            $table->bigInteger('stock');
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
