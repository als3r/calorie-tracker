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
        Schema::table('food_items', function (Blueprint $table) {
            $table->renameColumn('proteins', 'protein');
            $table->renameColumn('lipids', 'total_fat');
            $table->renameColumn('carbs', 'total_carb');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('food_items', function (Blueprint $table) {
            $table->renameColumn('protein', 'proteins');
            $table->renameColumn('total_fat', 'lipids');
            $table->renameColumn('total_carb', 'carbs');
        });
    }
};
