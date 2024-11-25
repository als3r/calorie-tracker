<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FoodItemSeeder;
use Database\Seeders\MealTypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FoodItemSeeder::class,
            MealTypeSeeder::class,
            MealSeeder::class,
            UserMealTemplateSeeder::class,
        ]);
    }
}
