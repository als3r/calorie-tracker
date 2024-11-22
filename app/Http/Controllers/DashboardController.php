<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $todaysMeals = Meal::with(['mealType', 'foodItems'])
            ->whereDate('date', now())
            ->orderBy('time')
            ->get();

        return view('dashboard', compact('todaysMeals'));
    }
}
