<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealType;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;

class MealController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of meals.
     */
    public function index(Request $request): View
    {
        $query = Meal::with(['mealType', 'foodItems'])
            ->where('user_id', auth()->id());

        // Filter by date if provided
        if ($request->filled('date')) {
            $query->whereDate('date', $request->date);
        }

        // Filter by meal type if provided
        if ($request->filled('meal_type')) {
            $query->where('meal_type_id', $request->meal_type);
        }

        $meals = $query->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->paginate(10)
            ->withQueryString(); // This preserves the filter parameters in pagination links

        $mealTypes = MealType::orderBy('display_order')->get();

        return view('meals.index', compact('meals', 'mealTypes'));
    }

    /**
     * Show the form for creating a new meal.
     */
    public function create(): View
    {
        $meal = new Meal();
        $mealTypes = MealType::orderBy('name')->get();
        $foodItems = FoodItem::orderBy('name')->get();
        $templates = auth()->user()->mealTemplates()
            ->with(['mealType', 'foodItems'])
            ->orderBy('name')
            ->get();

        return view('meals.form', compact('meal', 'mealTypes', 'foodItems', 'templates'));
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
            'food_items.*.food_item_id' => 'required|exists:food_items,id',
            'food_items.*.quantity' => 'required|numeric|min:0',
        ]);

        $meal = new Meal();
        $meal->user_id = auth()->id();
        $meal->meal_type_id = $validated['meal_type_id'];
        $meal->name = $validated['name'] ?? '';
        $meal->description = $validated['description'] ?? '';
        $meal->date = $validated['date'];
        $meal->time = now()->setTimeFromTimeString($validated['time']);
        $meal->save();

        // Attach food items with quantities and calculate totals
        $totalCalories = 0;
        $totalProtein = 0;
        $totalFat = 0;
        $totalCarb = 0;

        foreach ($validated['food_items'] as $item) {
            $foodItem = FoodItem::find($item['food_item_id']);
            $quantity = $item['quantity'];

            // Calculate nutritional values based on quantity
            $multiplier = $quantity / 100; // Since nutritional values are per 100g
            $totalCalories += $foodItem->calories_per_100g * $multiplier;
            $totalProtein += $foodItem->protein * $multiplier;
            $totalFat += $foodItem->total_fat * $multiplier;
            $totalCarb += $foodItem->total_carb * $multiplier;

            $meal->foodItems()->attach($foodItem->id, [
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
        // Add authorization check
        if ($meal->user_id !== auth()->id()) {
            abort(403);
        }

        $meal->load(['mealType', 'foodItems']);
        return view('meals.show', compact('meal'));
    }

    /**
     * Show the form for editing the specified meal.
     */
    public function edit(Meal $meal): View
    {
        $this->authorize('update', $meal);

        $mealTypes = MealType::orderBy('name')->get();
        $foodItems = FoodItem::orderBy('name')->get();
        $templates = auth()->user()->mealTemplates()
            ->with(['mealType', 'foodItems'])
            ->orderBy('name')
            ->get();

        return view('meals.form', compact('meal', 'mealTypes', 'foodItems', 'templates'));
    }

    /**
     * Update the specified meal.
     */
    public function update(Request $request, Meal $meal): RedirectResponse
    {
        // Add authorization check
        if ($meal->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'meal_type_id' => 'required|exists:meal_types,id',
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'food_items' => 'required|array|min:1',
            'food_items.*.food_item_id' => 'required|exists:food_items,id',
            'food_items.*.quantity' => 'required|numeric|min:0',
        ]);

        $meal->update([
            'meal_type_id' => $validated['meal_type_id'],
            'name' => $validated['name'] ?? '',
            'description' => $validated['description'] ?? '',
            'date' => $validated['date'],
            'time' => now()->setTimeFromTimeString($validated['time']),
        ]);

        // Detach all existing food items
        $meal->foodItems()->detach();

        // Attach food items with quantities and calculate totals
        $totalCalories = 0;
        $totalProtein = 0;
        $totalFat = 0;
        $totalCarb = 0;

        foreach ($validated['food_items'] as $item) {
            $foodItem = FoodItem::find($item['food_item_id']);
            $quantity = $item['quantity'];

            // Calculate nutritional values based on quantity
            $multiplier = $quantity / 100; // Since nutritional values are per 100g
            $totalCalories += $foodItem->calories_per_100g * $multiplier;
            $totalProtein += $foodItem->protein * $multiplier;
            $totalFat += $foodItem->total_fat * $multiplier;
            $totalCarb += $foodItem->total_carb * $multiplier;

            $meal->foodItems()->attach($foodItem->id, [
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
        // Add authorization check
        if ($meal->user_id !== auth()->id()) {
            abort(403);
        }

        $meal->delete();
        return redirect()->route('meals.index')
            ->with('success', 'Meal deleted successfully.');
    }

    /**
     * Create a template from the specified meal.
     */
    public function createTemplate(Request $request, Meal $meal)
    {
        if (auth()->id() !== $meal->user_id) {
            abort(403);
        }
        
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
        ]);

        $template = $meal->createTemplate($validated['name'], $validated['description']);

        return redirect()->route('meal-templates.edit', $template)
            ->with('success', 'Template created successfully from meal!');
    }
}
