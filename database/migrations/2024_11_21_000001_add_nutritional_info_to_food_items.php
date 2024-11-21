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
            $table->decimal('proteins', 8, 2)->after('calories_per_oz')->default(0);
            $table->decimal('lipids', 8, 2)->after('proteins')->default(0);
            $table->decimal('carbs', 8, 2)->after('lipids')->default(0);
            $table->decimal('fiber', 8, 2)->after('carbs')->default(0);
            $table->decimal('water', 8, 2)->after('fiber')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('food_items', function (Blueprint $table) {
            $table->dropColumn(['proteins', 'lipids', 'carbs', 'fiber', 'water']);
        });
    }
};
