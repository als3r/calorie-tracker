<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display meal history.
     */
    public function index()
    {
        $startDate = now()->subWeeks(5)->startOfWeek();
        $endDate = now()->addWeek()->endOfWeek();

        $meals = auth()->user()->meals()
            ->whereBetween('date', [$startDate, $endDate])
            ->get()
            ->groupBy(function($meal) {
                return $meal->date->format('Y-m-d');
            });

        $dailySummaries = $meals->map(function($dayMeals) {
            return [
                'total_calories' => $dayMeals->sum('total_calories'),
                'total_protein' => $dayMeals->sum('total_protein'),
                'total_fat' => $dayMeals->sum('total_fat'),
                'total_carb' => $dayMeals->sum('total_carb'),
                'meals_count' => $dayMeals->count()
            ];
        });

        $events = $meals->map(function($dayMeals, $date) {
            return [
                'start' => $date,
                'display' => 'background',
                'color' => '#60A5FA20'
            ];
        })->values()->all();

        return view('meals.history', [
            'startDate' => $startDate,
            'endDate' => $endDate,
            'dailySummaries' => $dailySummaries,
            'events' => $events
        ]);
    }
}
