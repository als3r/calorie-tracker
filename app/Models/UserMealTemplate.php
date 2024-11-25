<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserMealTemplate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'meal_type_id',
        'name',
        'description',
        'time',
        'total_calories',
        'total_protein',
        'total_fat',
        'total_carb',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'time' => 'datetime:H:i',
        'total_calories' => 'decimal:2',
        'total_protein' => 'decimal:2',
        'total_fat' => 'decimal:2',
        'total_carb' => 'decimal:2',
    ];

    /**
     * Get the user that owns this template.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the meal type for this template.
     */
    public function mealType(): BelongsTo
    {
        return $this->belongsTo(MealType::class);
    }

    /**
     * Get the food items for this template.
     */
    public function foodItems(): BelongsToMany
    {
        return $this->belongsToMany(FoodItem::class, 'template_food_items')
            ->withPivot('quantity', 'unit')
            ->withTimestamps();
    }

    /**
     * Calculate and update nutritional totals based on food items.
     */
    public function calculateNutritionalTotals(): void
    {
        $totals = ['calories' => 0, 'protein' => 0, 'fat' => 0, 'carb' => 0];
        
        foreach ($this->foodItems as $foodItem) {
            $quantity = $foodItem->pivot->quantity;
            
            $totals['calories'] += ($foodItem->calories_per_100g * $quantity) / 100;
            $totals['protein'] += ($foodItem->protein * $quantity) / 100;
            $totals['fat'] += ($foodItem->total_fat * $quantity) / 100;
            $totals['carb'] += ($foodItem->total_carb * $quantity) / 100;
        }
        
        $this->total_calories = $totals['calories'];
        $this->total_protein = $totals['protein'];
        $this->total_fat = $totals['fat'];
        $this->total_carb = $totals['carb'];
        
        $this->save();
    }

    /**
     * Create a new meal from this template.
     */
    public function createMeal(string $date): Meal
    {
        $meal = new Meal([
            'user_id' => $this->user_id,
            'meal_type_id' => $this->meal_type_id,
            'name' => $this->name,
            'description' => $this->description,
            'date' => $date,
            'time' => $this->time,
            'total_calories' => $this->total_calories,
            'total_protein' => $this->total_protein,
            'total_fat' => $this->total_fat,
            'total_carb' => $this->total_carb,
        ]);

        $meal->save();

        // Attach food items
        foreach ($this->foodItems as $foodItem) {
            $meal->foodItems()->attach($foodItem->id, [
                'quantity' => $foodItem->pivot->quantity,
                'unit' => $foodItem->pivot->unit,
            ]);
        }

        return $meal;
    }
}
