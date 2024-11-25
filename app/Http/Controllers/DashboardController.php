<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $todaysMeals = Meal::with(['mealType', 'foodItems'])
            ->where('user_id', auth()->id())
            ->whereDate('date', today())
            ->orderBy('time')
            ->get();

        // Calculate nutritional totals
        $todaysMeals->each(function ($meal) {
            $meal->total_calories = $meal->foodItems->sum(function ($item) {
                return ($item->calories_per_100g * $item->pivot->quantity) / 100;
            });
            $meal->total_protein = $meal->foodItems->sum(function ($item) {
                return ($item->protein * $item->pivot->quantity) / 100;
            });
            $meal->total_fat = $meal->foodItems->sum(function ($item) {
                return ($item->total_fat * $item->pivot->quantity) / 100;
            });
            $meal->total_carb = $meal->foodItems->sum(function ($item) {
                return ($item->total_carb * $item->pivot->quantity) / 100;
            });
        });

        return view('dashboard', compact('todaysMeals'));
    }
}
