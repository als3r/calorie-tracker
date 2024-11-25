<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\FoodItem;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MealSeeder extends Seeder
{
    private $commonFoodItems = [
        // Breakfast items
        ['id' => 1, 'name' => 'Acai Bowl', 'portions' => [200, 300, 400]],
        ['id' => 2, 'name' => 'Almond Butter', 'portions' => [15, 30, 45]],
        ['id' => 3, 'name' => 'Oatmeal', 'portions' => [50, 100, 150]],
        ['id' => 4, 'name' => 'Banana', 'portions' => [100, 120]],
        ['id' => 5, 'name' => 'Greek Yogurt', 'portions' => [150, 200, 250]],
        
        // Lunch/Dinner proteins
        ['id' => 10, 'name' => 'Chicken Breast', 'portions' => [150, 200, 250]],
        ['id' => 11, 'name' => 'Salmon', 'portions' => [150, 200, 250]],
        ['id' => 12, 'name' => 'Tuna', 'portions' => [100, 150, 200]],
        
        // Carbs
        ['id' => 15, 'name' => 'Brown Rice', 'portions' => [100, 150, 200]],
        ['id' => 16, 'name' => 'Quinoa', 'portions' => [100, 150, 200]],
        ['id' => 17, 'name' => 'Sweet Potato', 'portions' => [100, 150, 200]],
        
        // Vegetables
        ['id' => 20, 'name' => 'Broccoli', 'portions' => [100, 150, 200]],
        ['id' => 21, 'name' => 'Spinach', 'portions' => [50, 100, 150]],
        ['id' => 22, 'name' => 'Asparagus', 'portions' => [100, 150]],
        
        // Snacks
        ['id' => 25, 'name' => 'Mixed Nuts', 'portions' => [30, 50, 70]],
        ['id' => 26, 'name' => 'Apple', 'portions' => [150, 200]],
        ['id' => 27, 'name' => 'Protein Bar', 'portions' => [50, 60]],
    ];

    private $mealTypes = [
        1 => ['name' => 'Breakfast', 'times' => ['07:00', '07:30', '08:00', '08:30', '09:00']],
        2 => ['name' => 'Lunch', 'times' => ['12:00', '12:30', '13:00', '13:30', '14:00']],
        3 => ['name' => 'Dinner', 'times' => ['18:00', '18:30', '19:00', '19:30', '20:00']],
        5 => ['name' => 'Morning Snacks', 'times' => ['10:00', '10:30', '11:00']],
        6 => ['name' => 'Daytime Snacks', 'times' => ['15:00', '15:30', '16:00']],
        7 => ['name' => 'Evening Snacks', 'times' => ['21:00', '21:30', '22:00']],
    ];

    public function run(): void
    {
        // Generate meals for the last 7 days plus today
        for ($i = 7; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $this->generateMealsForDay($date);
        }
    }

    private function generateMealsForDay(Carbon $date)
    {
        // Randomly decide how many meals for this day (3-6)
        $numberOfMeals = rand(3, 6);
        
        // Always include breakfast, lunch, and dinner
        $mealTypeIds = [1, 2, 3];
        
        // Maybe add some snacks
        if ($numberOfMeals > 3) {
            $snackTypes = [5, 6, 7]; // Morning, Daytime, Evening snacks
            shuffle($snackTypes);
            array_splice($snackTypes, 0, $numberOfMeals - 3);
            $mealTypeIds = array_merge($mealTypeIds, $snackTypes);
        }
        
        sort($mealTypeIds); // Sort to maintain time order

        foreach ($mealTypeIds as $typeId) {
            $mealType = $this->mealTypes[$typeId];
            $time = $mealType['times'][array_rand($mealType['times'])];
            
            // Create the meal
            $meal = Meal::create([
                'user_id' => 1,
                'meal_type_id' => $typeId,
                'date' => $date,
                'time' => $time,
                'name' => $this->generateMealName($mealType['name']),
                'description' => $this->generateMealDescription($mealType['name']),
            ]);

            // Add 2-5 food items and calculate nutritional values
            $numberOfItems = rand(2, 5);
            $selectedItems = $this->selectFoodItems($numberOfItems, $typeId);
            
            $totalNutrition = [
                'calories' => 0,
                'protein' => 0,
                'fat' => 0,
                'carb' => 0
            ];
            
            foreach ($selectedItems as $item) {
                $quantity = $item['portions'][array_rand($item['portions'])];
                $foodItem = FoodItem::find($item['id']);
                
                // Calculate nutritional values based on quantity
                $multiplier = $quantity / 100; // Since nutritional values are per 100g
                $totalNutrition['calories'] += $foodItem->calories_per_100g * $multiplier;
                $totalNutrition['protein'] += $foodItem->protein * $multiplier;
                $totalNutrition['fat'] += $foodItem->total_fat * $multiplier;
                $totalNutrition['carb'] += $foodItem->total_carb * $multiplier;
                
                $meal->foodItems()->attach($item['id'], [
                    'quantity' => $quantity,
                    'unit' => 'g'
                ]);
            }
            
            // Update meal with calculated totals
            $meal->update([
                'total_calories' => round($totalNutrition['calories'], 2),
                'total_protein' => round($totalNutrition['protein'], 2),
                'total_fat' => round($totalNutrition['fat'], 2),
                'total_carb' => round($totalNutrition['carb'], 2),
            ]);
        }
    }

    private function generateMealName(string $type): string
    {
        $adjectives = ['Healthy', 'Fresh', 'Balanced', 'Nutritious', 'Light', 'Hearty', 'Quick', 'Energizing'];
        return $adjectives[array_rand($adjectives)] . ' ' . $type;
    }

    private function generateMealDescription(string $type): string
    {
        return "A " . strtolower($this->generateMealName($type)) . " meal";
    }

    private function selectFoodItems(int $count, int $mealTypeId): array
    {
        $items = [];
        $availableItems = $this->commonFoodItems;

        // Filter items based on meal type
        if ($mealTypeId == 1) { // Breakfast
            $availableItems = array_filter($this->commonFoodItems, function($item) {
                return in_array($item['id'], [1, 2, 3, 4, 5]); // Breakfast items
            });
        } elseif (in_array($mealTypeId, [5, 6, 7])) { // Snacks
            $availableItems = array_filter($this->commonFoodItems, function($item) {
                return in_array($item['id'], [4, 5, 25, 26, 27]); // Snack items
            });
        }

        // Randomly select items
        $selectedKeys = array_rand(array_values($availableItems), min($count, count($availableItems)));
        if (!is_array($selectedKeys)) {
            $selectedKeys = [$selectedKeys];
        }

        foreach ($selectedKeys as $key) {
            $items[] = array_values($availableItems)[$key];
        }

        return $items;
    }
}
