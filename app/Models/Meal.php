<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Meal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'meal_type_id',
        'name',
        'description',
        'date',
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
        'date' => 'date',
        'time' => 'datetime',
        'total_calories' => 'decimal:2',
        'total_protein' => 'decimal:2',
        'total_fat' => 'decimal:2',
        'total_carb' => 'decimal:2',
    ];

    /**
     * Get the meal type that owns this meal.
     */
    public function mealType(): BelongsTo
    {
        return $this->belongsTo(MealType::class);
    }

    /**
     * Get the food items for this meal.
     */
    public function foodItems(): BelongsToMany
    {
        return $this->belongsToMany(FoodItem::class, 'meal_food_items')
            ->withPivot(['quantity', 'unit'])
            ->withTimestamps();
    }
}
