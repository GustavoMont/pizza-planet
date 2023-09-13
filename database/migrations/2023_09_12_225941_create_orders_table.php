<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('value');
            $table->text('observations');
            $table->enum('status', ['pending', 'preparing', 'delivering', 'delivered']);
            $table->enum('payment_type', ['card', 'money', 'pix']);
            $table->decimal('change');
            $table->timestamps();


            $table->foreignId('pizza_id')->constrained()->restrictOnDelete();
            $table->foreignId('address_id')->constrained()->restrictOnDelete();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();

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