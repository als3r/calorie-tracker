<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    /**
     * Display a listing of food items.
     */
    public function index()
    {
        $foodItems = FoodItem::orderBy('name')->paginate(20);
        return view('food-items.index', compact('foodItems'));
    }

    /**
     * Show the form for creating a new food item.
     */
    public function create()
    {
        return view('food-items.create');
    }

    /**
     * Store a newly created food item.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'calories_per_100g' => 'required|numeric|min:0',
            'calories_per_oz' => 'required|numeric|min:0',
            'protein' => 'required|numeric|min:0|max:100',
            'total_fat' => 'required|numeric|min:0|max:100',
            'total_carb' => 'required|numeric|min:0|max:100',
            'fiber' => 'required|numeric|min:0|max:100',
            'water' => 'required|numeric|min:0|max:100',
        ]);

        FoodItem::create($validated);

        return redirect()->route('food-items.index')
            ->with('success', 'Food item created successfully.');
    }

    /**
     * Display the specified food item.
     */
    public function show(FoodItem $foodItem)
    {
        return view('food-items.show', compact('foodItem'));
    }

    /**
     * Show the form for editing the specified food item.
     */
    public function edit(FoodItem $foodItem)
    {
        return view('food-items.edit', compact('foodItem'));
    }

    /**
     * Update the specified food item.
     */
    public function update(Request $request, FoodItem $foodItem)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'calories_per_100g' => 'required|numeric|min:0',
            'calories_per_oz' => 'required|numeric|min:0',
            'protein' => 'required|numeric|min:0|max:100',
            'total_fat' => 'required|numeric|min:0|max:100',
            'total_carb' => 'required|numeric|min:0|max:100',
            'fiber' => 'required|numeric|min:0|max:100',
            'water' => 'required|numeric|min:0|max:100',
        ]);

        $foodItem->update($validated);

        return redirect()->route('food-items.index')
            ->with('success', 'Food item updated successfully.');
    }

    /**
     * Remove the specified food item.
     */
    public function destroy(FoodItem $foodItem)
    {
        $foodItem->delete();

        return redirect()->route('food-items.index')
            ->with('success', 'Food item deleted successfully.');
    }
}
