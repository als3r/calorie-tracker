<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealType;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MealController extends Controller
{
    /**
     * Display a listing of meals.
     */
    public function index(Request $request): View
    {
        $query = Meal::query()->with(['mealType', 'foodItems']);
        
        if ($request->has('date') && $request->get('date') !== null) {
            $query->whereDate('date', $request->get('date'));
        }
        
        if ($request->has('meal_type') && $request->get('meal_type') !== null) {
            $query->where('meal_type_id', $request->get('meal_type'));
        }
        
        $meals = $query->orderBy('date', 'desc')
                      ->orderBy('time', 'desc')
                      ->paginate(10);
                      
        $mealTypes = MealType::orderBy('display_order')->get();
        
        return view('meals.index', compact('meals', 'mealTypes'));
    }

    /**
     * Show the form for creating a new meal.
     */
    public function create(): View
    {
        $mealTypes = MealType::orderBy('display_order')->get();
        $foodItems = FoodItem::orderBy('name')->get();
        return view('meals.create', compact('mealTypes', 'foodItems'));
    }

    /**
     * Store a newly created meal.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'meal_type_id' => 'required|exists:meal_types,id',
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'food_items' => 'required|array|min:1',
            'food_items.*.id' => 'required|exists:food_items,id',
            'food_items.*.quantity' => 'required|numeric|min:0',
        ]);

        $meal = Meal::create([
            'meal_type_id' => $validated['meal_type_id'],
            'name' => $validated['name'] ?? '',
            'description' => $validated['description'] ?? '',
            'date' => $validated['date'],
            'time' => $validated['time'],
        ]);

        // Attach food items with quantities and calculate totals
        $totalCalories = 0;
        $totalProtein = 0;
        $totalFat = 0;
        $totalCarb = 0;

        foreach ($validated['food_items'] as $item) {
            $foodItem = FoodItem::find($item['id']);
            $quantity = $item['quantity'];

            // Calculate nutritional values based on quantity
            $multiplier = $quantity / 100; // Since nutritional values are per 100g
            $totalCalories += $foodItem->calories_per_100g * $multiplier;
            $totalProtein += $foodItem->protein * $multiplier;
            $totalFat += $foodItem->total_fat * $multiplier;
            $totalCarb += $foodItem->total_carb * $multiplier;

            $meal->foodItems()->attach($item['id'], [
                'quantity' => $quantity,
                'unit' => 'g', // Always use grams as the default unit
            ]);
        }

        // Update meal with calculated totals
        $meal->update([
            'total_calories' => round($totalCalories, 2),
            'total_protein' => round($totalProtein, 2),
            'total_fat' => round($totalFat, 2),
            'total_carb' => round($totalCarb, 2),
        ]);

        return redirect()->route('meals.index')
            ->with('success', 'Meal created successfully.');
    }

    /**
     * Display the specified meal.
     */
    public function show(Meal $meal): View
    {
        $meal->load(['mealType', 'foodItems']);
        return view('meals.show', compact('meal'));
    }

    /**
     * Show the form for editing the specified meal.
     */
    public function edit(Meal $meal): View
    {
        $meal->load('foodItems');
        $mealTypes = MealType::orderBy('display_order')->get();
        $foodItems = FoodItem::orderBy('name')->get();
        return view('meals.edit', compact('meal', 'mealTypes', 'foodItems'));
    }

    /**
     * Update the specified meal.
     */
    public function update(Request $request, Meal $meal): RedirectResponse
    {
        $validated = $request->validate([
            'meal_type_id' => 'required|exists:meal_types,id',
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'food_items' => 'required|array|min:1',
            'food_items.*.id' => 'required|exists:food_items,id',
            'food_items.*.quantity' => 'required|numeric|min:0',
        ]);

        $meal->update([
            'meal_type_id' => $validated['meal_type_id'],
            'name' => $validated['name'] ?? '',
            'description' => $validated['description'] ?? '',
            'date' => $validated['date'],
            'time' => $validated['time'],
        ]);

        // Detach all existing food items
        $meal->foodItems()->detach();

        // Attach food items with quantities and calculate totals
        $totalCalories = 0;
        $totalProtein = 0;
        $totalFat = 0;
        $totalCarb = 0;

        foreach ($validated['food_items'] as $item) {
            $foodItem = FoodItem::find($item['id']);
            $quantity = $item['quantity'];

            // Calculate nutritional values based on quantity
            $multiplier = $quantity / 100; // Since nutritional values are per 100g
            $totalCalories += $foodItem->calories_per_100g * $multiplier;
            $totalProtein += $foodItem->protein * $multiplier;
            $totalFat += $foodItem->total_fat * $multiplier;
            $totalCarb += $foodItem->total_carb * $multiplier;

            $meal->foodItems()->attach($item['id'], [
                'quantity' => $quantity,
                'unit' => 'g', // Always use grams as the default unit
            ]);
        }

        // Update meal with calculated totals
        $meal->update([
            'total_calories' => round($totalCalories, 2),
            'total_protein' => round($totalProtein, 2),
            'total_fat' => round($totalFat, 2),
            'total_carb' => round($totalCarb, 2),
        ]);

        return redirect()->route('meals.index')
            ->with('success', 'Meal updated successfully.');
    }

    /**
     * Remove the specified meal.
     */
    public function destroy(Meal $meal): RedirectResponse
    {
        $meal->delete();
        return redirect()->route('meals.index')
            ->with('success', 'Meal deleted successfully.');
    }
}
