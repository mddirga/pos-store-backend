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
            $table->string('name');
            // DESCRIPTION
            $table->text('description')->nullable();
            // PRICE
            $table->integer('price')->default(0);
            // STOCK
            $table->integer('stock')->default(0);
            // CATEGORY ENUM (FOOD, DRINK, SNACK)
            $table->enum('category', ['food', 'drink', 'snack']);
            // IMAGE
            $table->string('image')->nullable();
            $table->timestamps();
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
