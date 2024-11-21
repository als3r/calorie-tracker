<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'calories_per_100g',
        'calories_per_oz',
        'protein',
        'total_fat',
        'total_carb',
        'fiber',
        'water',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'calories_per_100g' => 'decimal:2',
        'calories_per_oz' => 'decimal:2',
        'protein' => 'decimal:2',
        'total_fat' => 'decimal:2',
        'total_carb' => 'decimal:2',
        'fiber' => 'decimal:2',
        'water' => 'decimal:2',
    ];
}
