<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\FoodItem;
use App\Models\UserMealTemplate;
use Illuminate\Database\Seeder;

class UserMealTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get three different types of meals to create templates from
        $meals = [
            // Get a breakfast meal
            Meal::where('user_id', 1)
                ->where('meal_type_id', 1)
                ->with('foodItems')
                ->first(),
            
            // Get a lunch meal
            Meal::where('user_id', 1)
                ->where('meal_type_id', 2)
                ->with('foodItems')
                ->first(),
            
            // Get a dinner meal
            Meal::where('user_id', 1)
                ->where('meal_type_id', 3)
                ->with('foodItems')
                ->first(),
        ];

        $templateNames = [
            'Quick & Healthy Breakfast',
            'Power Lunch',
            'Balanced Dinner'
        ];

        $templateDescriptions = [
            'A nutritious breakfast template with a good mix of protein and carbs',
            'High-protein lunch perfect for workdays',
            'Well-balanced dinner with lean protein and vegetables'
        ];

        foreach ($meals as $index => $meal) {
            if (!$meal) continue;

            // Create template from the meal
            $template = new UserMealTemplate([
                'user_id' => 1,
                'meal_type_id' => $meal->meal_type_id,
                'name' => $templateNames[$index],
                'description' => $templateDescriptions[$index],
                'time' => $meal->time,
            ]);

            $template->save();

            // Copy food items from the meal to the template and calculate nutritional values
            $totalNutrition = [
                'calories' => 0,
                'protein' => 0,
                'fat' => 0,
                'carb' => 0
            ];

            foreach ($meal->foodItems as $foodItem) {
                $quantity = $foodItem->pivot->quantity;
                
                // Calculate nutritional values based on quantity
                $multiplier = $quantity / 100; // Since nutritional values are per 100g
                $totalNutrition['calories'] += $foodItem->calories_per_100g * $multiplier;
                $totalNutrition['protein'] += $foodItem->protein * $multiplier;
                $totalNutrition['fat'] += $foodItem->total_fat * $multiplier;
                $totalNutrition['carb'] += $foodItem->total_carb * $multiplier;

                $template->foodItems()->attach($foodItem->id, [
                    'quantity' => $quantity,
                    'unit' => 'g'
                ]);
            }

            // Update template with calculated totals
            $template->update([
                'total_calories' => round($totalNutrition['calories'], 2),
                'total_protein' => round($totalNutrition['protein'], 2),
                'total_fat' => round($totalNutrition['fat'], 2),
                'total_carb' => round($totalNutrition['carb'], 2),
            ]);
        }
    }
}
