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
        Schema::create('stock_purchase_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_purchase_id')->constrained('stock_purchases', 'id')->onDelete('cascade');
            $table->foreignId('ingredient_id')->constrained('ingridents', 'id')->onDelete('cascade');
            $table->string('qty');
            $table->bigInteger('subtotal');
            $table->string('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_purchase_ingredients');
    }
};
