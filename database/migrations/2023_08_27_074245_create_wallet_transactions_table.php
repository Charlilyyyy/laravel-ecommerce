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
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('wallet_id');
            $table->foreign('wallet_id')->references('id')->on('wallets');
            $table->string('type')->nullable();
            $table->string('description');
            $table->decimal('amount',9,2);
            $table->date('transaction_date');
            $table->decimal('in',9,2);
            $table->decimal('out',9,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transactions');
    }
};
