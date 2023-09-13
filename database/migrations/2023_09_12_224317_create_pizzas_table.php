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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flavor_1_id');
            $table->unsignedBigInteger('flavor_2_id');
            $table->timestamps();

            $table->foreign('flavor_1_id')->references('id')->on('flavors')->restrictOnDelete();
            $table->foreign('flavor_2_id')->references('id')->on('flavors')->restrictOnDelete();
            $table->foreignId('size_id')->constrained()->restrictOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};