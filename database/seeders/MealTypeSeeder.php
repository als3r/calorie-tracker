<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mealTypes = [
            ['name' => 'Breakfast', 'description' => 'Morning meals', 'display_order' => 1],
            ['name' => 'Lunch', 'description' => 'Midday meals', 'display_order' => 2],
            ['name' => 'Dinner', 'description' => 'Evening meals', 'display_order' => 3],
            ['name' => 'Snacks', 'description' => 'Between-meal snacks', 'display_order' => 4],
            ['name' => 'Morning Snacks', 'description' => 'Morning between-meal snacks', 'display_order' => 11],
            ['name' => 'Daytime Snacks', 'description' => 'Daytime between-meal snacks', 'display_order' => 12],
            ['name' => 'Evening Snacks', 'description' => 'Evening between-meal snacks', 'display_order' => 13],
            ['name' => 'Late Snacks', 'description' => 'Late night between-meal snacks', 'display_order' => 14],
            ['name' => 'Takeout Breakfast', 'description' => 'Takeout Breakfast', 'display_order' => 21],
            ['name' => 'Takeout Lunch', 'description' => 'Takeout Lunch', 'display_order' => 22],
            ['name' => 'Takeout Dinner', 'description' => 'Takeout Dinner', 'display_order' => 23],
            ['name' => 'Dine-in Breakfast', 'description' => 'Dine-in Breakfast', 'display_order' => 31],
            ['name' => 'Dine-in Lunch', 'description' => 'Dine-in Lunch', 'display_order' => 32],
            ['name' => 'Dine-in Dinner', 'description' => 'Dine-in Dinner', 'display_order' => 33],
            ['name' => 'Other', 'description' => 'Other', 'display_order' => 99],
        ];

        DB::table('meal_types')->insert($mealTypes);
    }
}
