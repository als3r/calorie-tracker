<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;

class FoodItemSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query', '');
        
        $foodItems = FoodItem::where('name', 'like', "%{$query}%")
            ->orderBy('name')
            ->limit(10)
            ->get(['id', 'name', 'calories_per_100g', 'protein', 'total_fat', 'total_carb'])
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => sprintf(
                        '%d cal | %.1fg P | %.1fg F | %.1fg C',
                        $item->calories_per_100g,
                        $item->protein,
                        $item->total_fat,
                        $item->total_carb
                    )
                ];
            });
            
        return response()->json($foodItems);
    }
}
