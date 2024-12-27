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
        Schema::table('product_warehouse', function (Blueprint $table) {
            $table->integer('sort')->after('price')->nullable();
            $table->boolean('is_favourite')->after('sort')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_warehouse', function (Blueprint $table) {
            //
        });
    }
};
