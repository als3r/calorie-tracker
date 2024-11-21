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
        'proteins',
        'lipids',
        'carbs',
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
        'proteins' => 'decimal:2',
        'lipids' => 'decimal:2',
        'carbs' => 'decimal:2',
        'fiber' => 'decimal:2',
        'water' => 'decimal:2',
    ];
}
