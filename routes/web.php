<?php

use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\MealTemplateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/history', [HistoryController::class, 'index'])->name('history');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Meal Management Routes
    Route::resource('meals', MealController::class);
    Route::post('/meals/{meal}/create-template', [MealController::class, 'createTemplate'])->name('meals.create-template');

    // Meal Template Management Routes
    Route::resource('meal-templates', MealTemplateController::class);
    Route::post('/meal-templates/{template}/create-meal', [MealTemplateController::class, 'createMeal'])->name('meal-templates.create-meal');
    Route::get('/meal-templates/{template}/data', [MealTemplateController::class, 'getData'])->name('meal-templates.data');

    // Food Items routes
    Route::resource('food-items', FoodItemController::class);
    Route::get('/api/food-items/search', [App\Http\Controllers\Api\FoodItemSearchController::class, 'search'])
        ->name('api.food-items.search');
});

require __DIR__.'/auth.php';
