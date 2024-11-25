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
        Schema::create('user_meal_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('meal_type_id')->constrained()->onDelete('restrict');
            $table->string('name');
            $table->text('description')->nullable();
            $table->time('time');
            $table->decimal('total_calories', 8, 2)->default(0);
            $table->decimal('total_protein', 8, 2)->default(0);
            $table->decimal('total_fat', 8, 2)->default(0);
            $table->decimal('total_carb', 8, 2)->default(0);
            $table->timestamps();
        });

        // Create pivot table for template food items
        Schema::create('template_food_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_meal_template_id')->constrained()->onDelete('cascade');
            $table->foreignId('food_item_id')->constrained('food_items')->onDelete('cascade');
            $table->decimal('quantity', 8, 2);
            $table->string('unit')->default('g');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_food_items');
        Schema::dropIfExists('user_meal_templates');
    }
};
