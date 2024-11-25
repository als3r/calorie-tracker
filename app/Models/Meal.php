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
        'user_id',
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
        'time' => 'datetime:H:i',
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
     * Get the user that owns this meal.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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

    /**
     * Create a new meal template based on this meal.
     */
    public function createTemplate(string $name, ?string $description = null): UserMealTemplate
    {
        $template = new UserMealTemplate([
            'user_id' => $this->user_id,
            'meal_type_id' => $this->meal_type_id,
            'name' => $name,
            'description' => $description ?? $this->description,
            'time' => $this->time,
            'total_calories' => $this->total_calories,
            'total_protein' => $this->total_protein,
            'total_fat' => $this->total_fat,
            'total_carb' => $this->total_carb,
        ]);

        $template->save();

        // Copy food items
        foreach ($this->foodItems as $foodItem) {
            $template->foodItems()->attach($foodItem->id, [
                'quantity' => $foodItem->pivot->quantity,
                'unit' => $foodItem->pivot->unit,
            ]);
        }

        return $template;
    }
}
