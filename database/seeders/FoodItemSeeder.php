<?php

namespace Database\Seeders;

use App\Models\FoodItem;
use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foodItems = [
            [
                'name' => 'Acai Bowl',
                'calories_per_100g' => 70.0,
                'calories_per_oz' => 19.84,
                'protein' => 2.20,
                'total_fat' => 5.30,
                'total_carb' => 35.20,
                'fiber' => 2.00,
                'water' => 86.30
            ],
            [
                'name' => 'Almond Butter',
                'calories_per_100g' => 614.0,
                'calories_per_oz' => 174.0,
                'protein' => 21.00,
                'total_fat' => 49.90,
                'total_carb' => 21.70,
                'fiber' => 10.50,
                'water' => 1.40
            ],
            [
                'name' => 'Almond Milk',
                'calories_per_100g' => 17.0,
                'calories_per_oz' => 4.82,
                'protein' => 0.40,
                'total_fat' => 1.10,
                'total_carb' => 3.30,
                'fiber' => 0.40,
                'water' => 93.80
            ],
            [
                'name' => 'Almonds',
                'calories_per_100g' => 579.0,
                'calories_per_oz' => 164.12,
                'protein' => 21.15,
                'total_fat' => 49.93,
                'total_carb' => 21.55,
                'fiber' => 12.50,
                'water' => 4.41
            ],
            [
                'name' => 'Anchovy',
                'calories_per_100g' => 208.0,
                'calories_per_oz' => 58.97,
                'protein' => 28.62,
                'total_fat' => 9.71,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 69.60
            ],
            [
                'name' => 'Apple (Red)',
                'calories_per_100g' => 52.0,
                'calories_per_oz' => 14.74,
                'protein' => 0.26,
                'total_fat' => 0.17,
                'total_carb' => 13.81,
                'fiber' => 2.40,
                'water' => 85.56
            ],
            [
                'name' => 'Apricot',
                'calories_per_100g' => 48.0,
                'calories_per_oz' => 13.60,
                'protein' => 1.40,
                'total_fat' => 0.39,
                'total_carb' => 11.12,
                'fiber' => 2.00,
                'water' => 86.35
            ],
            [
                'name' => 'Artichoke',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'protein' => 3.27,
                'total_fat' => 0.15,
                'total_carb' => 10.51,
                'fiber' => 5.40,
                'water' => 84.94
            ],
            [
                'name' => 'Arugula',
                'calories_per_100g' => 25.0,
                'calories_per_oz' => 7.09,
                'protein' => 2.58,
                'total_fat' => 0.66,
                'total_carb' => 3.65,
                'fiber' => 1.60,
                'water' => 91.71
            ],
            [
                'name' => 'Asparagus',
                'calories_per_100g' => 20.0,
                'calories_per_oz' => 5.67,
                'protein' => 2.20,
                'total_fat' => 0.12,
                'total_carb' => 3.88,
                'fiber' => 2.10,
                'water' => 93.22
            ],
            [
                'name' => 'Avocado',
                'calories_per_100g' => 160.0,
                'calories_per_oz' => 45.36,
                'protein' => 2.00,
                'total_fat' => 14.66,
                'total_carb' => 8.53,
                'fiber' => 6.70,
                'water' => 73.23
            ],
            [
                'name' => 'Bagel (Plain)',
                'calories_per_100g' => 257.0,
                'calories_per_oz' => 72.83,
                'protein' => 9.00,
                'total_fat' => 1.50,
                'total_carb' => 50.20,
                'fiber' => 2.10,
                'water' => 37.20
            ],
            [
                'name' => 'Banana',
                'calories_per_100g' => 89.0,
                'calories_per_oz' => 25.22,
                'protein' => 1.09,
                'total_fat' => 0.33,
                'total_carb' => 22.84,
                'fiber' => 2.60,
                'water' => 74.91
            ],
            [
                'name' => 'Beef (Ground, 80/20)',
                'calories_per_100g' => 254.0,
                'calories_per_oz' => 71.98,
                'protein' => 17.17,
                'total_fat' => 20.00,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 61.90
            ],
            [
                'name' => 'Beets (Cooked)',
                'calories_per_100g' => 44.0,
                'calories_per_oz' => 12.47,
                'protein' => 1.68,
                'total_fat' => 0.18,
                'total_carb' => 9.96,
                'fiber' => 2.00,
                'water' => 87.58
            ],
            [
                'name' => 'Black Beans (Cooked)',
                'calories_per_100g' => 132.0,
                'calories_per_oz' => 37.42,
                'protein' => 8.86,
                'total_fat' => 0.54,
                'total_carb' => 23.71,
                'fiber' => 8.70,
                'water' => 65.74
            ],
            [
                'name' => 'Blackberries',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.18,
                'protein' => 1.39,
                'total_fat' => 0.49,
                'total_carb' => 9.61,
                'fiber' => 5.30,
                'water' => 88.15
            ],
            [
                'name' => 'Blueberries',
                'calories_per_100g' => 57.0,
                'calories_per_oz' => 16.15,
                'protein' => 0.74,
                'total_fat' => 0.33,
                'total_carb' => 14.49,
                'fiber' => 2.40,
                'water' => 84.21
            ],
            [
                'name' => 'Brazil Nuts',
                'calories_per_100g' => 656.0,
                'calories_per_oz' => 185.92,
                'protein' => 14.32,
                'total_fat' => 66.43,
                'total_carb' => 12.27,
                'fiber' => 7.50,
                'water' => 3.48
            ],
            [
                'name' => 'Broccoli',
                'calories_per_100g' => 34.0,
                'calories_per_oz' => 9.63,
                'protein' => 2.82,
                'total_fat' => 0.37,
                'total_carb' => 6.64,
                'fiber' => 2.60,
                'water' => 89.30
            ],
            [
                'name' => 'Brussels Sprouts',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.18,
                'protein' => 3.38,
                'total_fat' => 0.30,
                'total_carb' => 8.95,
                'fiber' => 3.80,
                'water' => 86.00
            ],
            [
                'name' => 'Butter',
                'calories_per_100g' => 717.0,
                'calories_per_oz' => 203.22,
                'protein' => 0.85,
                'total_fat' => 81.11,
                'total_carb' => 0.06,
                'fiber' => 0.00,
                'water' => 17.94
            ],
            [
                'name' => 'Butternut Squash',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'protein' => 1.00,
                'total_fat' => 0.10,
                'total_carb' => 11.69,
                'fiber' => 2.00,
                'water' => 86.41
            ],
            [
                'name' => 'Carrots (Raw)',
                'calories_per_100g' => 41.0,
                'calories_per_oz' => 11.62,
                'protein' => 0.93,
                'total_fat' => 0.24,
                'total_carb' => 9.58,
                'fiber' => 2.80,
                'water' => 88.29
            ],
            [
                'name' => 'Cashews',
                'calories_per_100g' => 553.0,
                'calories_per_oz' => 156.77,
                'protein' => 18.22,
                'total_fat' => 43.85,
                'total_carb' => 30.19,
                'fiber' => 3.30,
                'water' => 5.20
            ],
            [
                'name' => 'Cauliflower',
                'calories_per_100g' => 25.0,
                'calories_per_oz' => 7.09,
                'protein' => 1.92,
                'total_fat' => 0.28,
                'total_carb' => 4.97,
                'fiber' => 2.00,
                'water' => 92.07
            ],
            [
                'name' => 'Chia Seeds',
                'calories_per_100g' => 486.0,
                'calories_per_oz' => 137.77,
                'protein' => 16.54,
                'total_fat' => 30.74,
                'total_carb' => 42.12,
                'fiber' => 34.40,
                'water' => 5.80
            ],
            [
                'name' => 'Chicken Breast',
                'calories_per_100g' => 165.0,
                'calories_per_oz' => 46.75,
                'protein' => 31.02,
                'total_fat' => 3.57,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 65.26
            ],
            [
                'name' => 'Coconut (Fresh)',
                'calories_per_100g' => 354.0,
                'calories_per_oz' => 100.31,
                'protein' => 3.33,
                'total_fat' => 33.49,
                'total_carb' => 15.23,
                'fiber' => 9.00,
                'water' => 46.99
            ],
            [
                'name' => 'Corn (Sweet, Cooked)',
                'calories_per_100g' => 96.0,
                'calories_per_oz' => 27.22,
                'protein' => 3.27,
                'total_fat' => 1.35,
                'total_carb' => 21.30,
                'fiber' => 2.40,
                'water' => 73.20
            ],
            [
                'name' => 'Cottage Cheese (2%)',
                'calories_per_100g' => 81.0,
                'calories_per_oz' => 22.96,
                'protein' => 11.12,
                'total_fat' => 2.30,
                'total_carb' => 3.38,
                'fiber' => 0.00,
                'water' => 82.24
            ],
            [
                'name' => 'Cranberries (Raw)',
                'calories_per_100g' => 46.0,
                'calories_per_oz' => 13.04,
                'protein' => 0.39,
                'total_fat' => 0.13,
                'total_carb' => 11.97,
                'fiber' => 4.60,
                'water' => 87.13
            ],
            [
                'name' => 'Cucumber',
                'calories_per_100g' => 15.0,
                'calories_per_oz' => 4.25,
                'protein' => 0.65,
                'total_fat' => 0.11,
                'total_carb' => 3.63,
                'fiber' => 0.50,
                'water' => 95.23
            ],
            [
                'name' => 'Deli Turkey',
                'calories_per_100g' => 104.0,
                'calories_per_oz' => 29.47,
                'protein' => 17.68,
                'total_fat' => 2.70,
                'total_carb' => 1.32,
                'fiber' => 0.00,
                'water' => 77.50
            ],
            [
                'name' => 'Dried Apricots',
                'calories_per_100g' => 241.0,
                'calories_per_oz' => 68.30,
                'protein' => 3.39,
                'total_fat' => 0.51,
                'total_carb' => 62.64,
                'fiber' => 7.30,
                'water' => 30.89
            ],
            [
                'name' => 'Dried Cranberries',
                'calories_per_100g' => 308.0,
                'calories_per_oz' => 87.31,
                'protein' => 0.17,
                'total_fat' => 1.09,
                'total_carb' => 82.80,
                'fiber' => 3.60,
                'water' => 15.10
            ],
            [
                'name' => 'Dried Mango',
                'calories_per_100g' => 319.0,
                'calories_per_oz' => 90.41,
                'protein' => 1.32,
                'total_fat' => 1.18,
                'total_carb' => 78.57,
                'fiber' => 3.70,
                'water' => 18.20
            ],
            [
                'name' => 'Dried Seaweed',
                'calories_per_100g' => 349.0,
                'calories_per_oz' => 98.89,
                'protein' => 5.81,
                'total_fat' => 1.64,
                'total_carb' => 81.37,
                'fiber' => 0.50,
                'water' => 7.39
            ],
            [
                'name' => 'Egg',
                'calories_per_100g' => 155.0,
                'calories_per_oz' => 43.94,
                'protein' => 12.58,
                'total_fat' => 10.61,
                'total_carb' => 1.12,
                'fiber' => 0.00,
                'water' => 74.62
            ],
            [
                'name' => 'Egg Noodles',
                'calories_per_100g' => 384.0,
                'calories_per_oz' => 108.82,
                'protein' => 14.16,
                'total_fat' => 4.44,
                'total_carb' => 71.27,
                'fiber' => 3.30,
                'water' => 8.52
            ],
            [
                'name' => 'Egg Whites',
                'calories_per_100g' => 52.0,
                'calories_per_oz' => 14.74,
                'protein' => 10.90,
                'total_fat' => 0.17,
                'total_carb' => 0.73,
                'fiber' => 0.00,
                'water' => 87.57
            ],
            [
                'name' => 'Egg Yolk',
                'calories_per_100g' => 322.0,
                'calories_per_oz' => 91.26,
                'protein' => 15.86,
                'total_fat' => 26.54,
                'total_carb' => 3.59,
                'fiber' => 0.00,
                'water' => 52.31
            ],
            [
                'name' => 'Eggplant',
                'calories_per_100g' => 25.0,
                'calories_per_oz' => 7.09,
                'protein' => 0.98,
                'total_fat' => 0.18,
                'total_carb' => 5.88,
                'fiber' => 3.00,
                'water' => 92.30
            ],
            [
                'name' => 'Edamame',
                'calories_per_100g' => 122.0,
                'calories_per_oz' => 34.58,
                'protein' => 11.91,
                'total_fat' => 5.20,
                'total_carb' => 9.94,
                'fiber' => 5.20,
                'water' => 72.10
            ],
            [
                'name' => 'Emmental Cheese',
                'calories_per_100g' => 379.0,
                'calories_per_oz' => 107.43,
                'protein' => 27.32,
                'total_fat' => 29.68,
                'total_carb' => 1.44,
                'fiber' => 0.00,
                'water' => 37.30
            ],
            [
                'name' => 'English Muffin',
                'calories_per_100g' => 227.0,
                'calories_per_oz' => 64.34,
                'protein' => 8.50,
                'total_fat' => 1.84,
                'total_carb' => 44.70,
                'fiber' => 2.30,
                'water' => 42.80
            ],
            [
                'name' => 'Feta Cheese',
                'calories_per_100g' => 264.0,
                'calories_per_oz' => 74.82,
                'protein' => 14.21,
                'total_fat' => 21.28,
                'total_carb' => 4.09,
                'fiber' => 0.00,
                'water' => 55.22
            ],
            [
                'name' => 'Flax Seeds',
                'calories_per_100g' => 534.0,
                'calories_per_oz' => 151.39,
                'protein' => 18.29,
                'total_fat' => 42.16,
                'total_carb' => 28.88,
                'fiber' => 27.30,
                'water' => 6.96
            ],
            [
                'name' => 'French Bread',
                'calories_per_100g' => 274.0,
                'calories_per_oz' => 77.65,
                'protein' => 9.00,
                'total_fat' => 3.40,
                'total_carb' => 50.61,
                'fiber' => 3.00,
                'water' => 34.30
            ],
            [
                'name' => 'Fresh Salmon',
                'calories_per_100g' => 208.0,
                'calories_per_oz' => 58.97,
                'protein' => 20.42,
                'total_fat' => 13.42,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 64.89
            ],
            [
                'name' => 'Garlic',
                'calories_per_100g' => 149.0,
                'calories_per_oz' => 42.23,
                'protein' => 6.36,
                'total_fat' => 0.50,
                'total_carb' => 33.06,
                'fiber' => 2.10,
                'water' => 58.58
            ],
            [
                'name' => 'Ginger Root',
                'calories_per_100g' => 80.0,
                'calories_per_oz' => 22.68,
                'protein' => 1.82,
                'total_fat' => 0.75,
                'total_carb' => 17.77,
                'fiber' => 2.00,
                'water' => 78.89
            ],
            [
                'name' => 'Granola',
                'calories_per_100g' => 412.0,
                'calories_per_oz' => 116.77,
                'protein' => 8.50,
                'total_fat' => 12.50,
                'total_carb' => 69.40,
                'fiber' => 6.80,
                'water' => 5.30
            ],
            [
                'name' => 'Grapes',
                'calories_per_100g' => 69.0,
                'calories_per_oz' => 19.56,
                'protein' => 0.72,
                'total_fat' => 0.16,
                'total_carb' => 18.10,
                'fiber' => 0.90,
                'water' => 80.54
            ],
            [
                'name' => 'Greek Yogurt',
                'calories_per_100g' => 59.0,
                'calories_per_oz' => 16.72,
                'protein' => 10.19,
                'total_fat' => 0.39,
                'total_carb' => 3.60,
                'fiber' => 0.00,
                'water' => 85.10
            ],
            [
                'name' => 'Green Beans',
                'calories_per_100g' => 31.0,
                'calories_per_oz' => 8.79,
                'protein' => 1.83,
                'total_fat' => 0.22,
                'total_carb' => 7.13,
                'fiber' => 3.40,
                'water' => 89.80
            ],
            [
                'name' => 'Green Peas',
                'calories_per_100g' => 81.0,
                'calories_per_oz' => 22.96,
                'protein' => 5.42,
                'total_fat' => 0.40,
                'total_carb' => 14.45,
                'fiber' => 5.70,
                'water' => 78.86
            ],
            [
                'name' => 'Ground Beef (80/20)',
                'calories_per_100g' => 254.0,
                'calories_per_oz' => 71.99,
                'protein' => 17.17,
                'total_fat' => 20.00,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 61.30
            ],
            [
                'name' => 'Ground Turkey',
                'calories_per_100g' => 190.0,
                'calories_per_oz' => 53.86,
                'protein' => 19.66,
                'total_fat' => 11.70,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 67.98
            ],
            [
                'name' => 'Halibut',
                'calories_per_100g' => 111.0,
                'calories_per_oz' => 31.47,
                'protein' => 20.81,
                'total_fat' => 2.29,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 75.35
            ],
            [
                'name' => 'Ham (Cooked)',
                'calories_per_100g' => 145.0,
                'calories_per_oz' => 41.10,
                'protein' => 21.82,
                'total_fat' => 5.53,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 71.30
            ],
            [
                'name' => 'Honey',
                'calories_per_100g' => 304.0,
                'calories_per_oz' => 86.16,
                'protein' => 0.30,
                'total_fat' => 0.00,
                'total_carb' => 82.40,
                'fiber' => 0.20,
                'water' => 17.10
            ],
            [
                'name' => 'Hummus',
                'calories_per_100g' => 177.0,
                'calories_per_oz' => 50.17,
                'protein' => 4.86,
                'total_fat' => 8.59,
                'total_carb' => 20.12,
                'fiber' => 4.00,
                'water' => 65.10
            ],
            [
                'name' => 'Ice Cream (Vanilla)',
                'calories_per_100g' => 207.0,
                'calories_per_oz' => 58.67,
                'protein' => 3.50,
                'total_fat' => 11.00,
                'total_carb' => 23.60,
                'fiber' => 0.70,
                'water' => 60.50
            ],
            [
                'name' => 'Iceberg Lettuce',
                'calories_per_100g' => 14.0,
                'calories_per_oz' => 3.97,
                'protein' => 0.90,
                'total_fat' => 0.14,
                'total_carb' => 2.97,
                'fiber' => 1.20,
                'water' => 95.64
            ],
            [
                'name' => 'Instant Noodles',
                'calories_per_100g' => 437.0,
                'calories_per_oz' => 123.85,
                'protein' => 9.00,
                'total_fat' => 17.20,
                'total_carb' => 62.10,
                'fiber' => 2.30,
                'water' => 8.00
            ],
            [
                'name' => 'Instant Rice',
                'calories_per_100g' => 357.0,
                'calories_per_oz' => 101.17,
                'protein' => 7.13,
                'total_fat' => 0.58,
                'total_carb' => 79.34,
                'fiber' => 1.40,
                'water' => 10.50
            ],
            [
                'name' => 'Italian Bread',
                'calories_per_100g' => 227.0,
                'calories_per_oz' => 64.34,
                'protein' => 8.50,
                'total_fat' => 1.84,
                'total_carb' => 44.70,
                'fiber' => 2.30,
                'water' => 42.80
            ],
            [
                'name' => 'Italian Dressing',
                'calories_per_100g' => 248.0,
                'calories_per_oz' => 70.31,
                'protein' => 0.70,
                'total_fat' => 24.30,
                'total_carb' => 8.70,
                'fiber' => 0.00,
                'water' => 65.20
            ],
            [
                'name' => 'Italian Sausage',
                'calories_per_100g' => 302.0,
                'calories_per_oz' => 85.61,
                'protein' => 17.40,
                'total_fat' => 25.10,
                'total_carb' => 2.30,
                'fiber' => 0.00,
                'water' => 52.80
            ],
            [
                'name' => 'Irish Cream',
                'calories_per_100g' => 327.0,
                'calories_per_oz' => 92.69,
                'protein' => 3.50,
                'total_fat' => 13.70,
                'total_carb' => 25.80,
                'fiber' => 0.00,
                'water' => 55.00
            ],
            [
                'name' => 'Irish Whiskey',
                'calories_per_100g' => 270.0,
                'calories_per_oz' => 76.50,
                'protein' => 0.00,
                'total_fat' => 0.00,
                'total_carb' => 0.10,
                'fiber' => 0.00,
                'water' => 99.90
            ],
            [
                'name' => 'Jackfruit',
                'calories_per_100g' => 95.0,
                'calories_per_oz' => 26.93,
                'protein' => 1.72,
                'total_fat' => 0.64,
                'total_carb' => 23.25,
                'fiber' => 1.50,
                'water' => 73.23
            ],
            [
                'name' => 'Jalapeno Pepper',
                'calories_per_100g' => 28.0,
                'calories_per_oz' => 7.93,
                'protein' => 0.91,
                'total_fat' => 0.37,
                'total_carb' => 6.50,
                'fiber' => 2.80,
                'water' => 90.95
            ],
            [
                'name' => 'Jelly',
                'calories_per_100g' => 278.0,
                'calories_per_oz' => 78.78,
                'protein' => 0.00,
                'total_fat' => 0.00,
                'total_carb' => 69.50,
                'fiber' => 0.30,
                'water' => 30.20
            ],
            [
                'name' => 'Juice (Apple)',
                'calories_per_100g' => 46.0,
                'calories_per_oz' => 13.04,
                'protein' => 0.10,
                'total_fat' => 0.13,
                'total_carb' => 11.30,
                'fiber' => 0.20,
                'water' => 88.27
            ],
            [
                'name' => 'Kale',
                'calories_per_100g' => 49.0,
                'calories_per_oz' => 13.89,
                'protein' => 4.28,
                'total_fat' => 0.93,
                'total_carb' => 8.75,
                'fiber' => 3.60,
                'water' => 84.46
            ],
            [
                'name' => 'Kamut (Cooked)',
                'calories_per_100g' => 146.0,
                'calories_per_oz' => 41.37,
                'protein' => 6.35,
                'total_fat' => 0.69,
                'total_carb' => 30.45,
                'fiber' => 3.20,
                'water' => 61.50
            ],
            [
                'name' => 'Kelp (Raw)',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.18,
                'protein' => 1.68,
                'total_fat' => 0.56,
                'total_carb' => 9.57,
                'fiber' => 1.30,
                'water' => 85.90
            ],
            [
                'name' => 'Kidney Beans',
                'calories_per_100g' => 127.0,
                'calories_per_oz' => 36.00,
                'protein' => 8.67,
                'total_fat' => 0.50,
                'total_carb' => 22.80,
                'fiber' => 6.40,
                'water' => 66.94
            ],
            [
                'name' => 'Kiwi',
                'calories_per_100g' => 61.0,
                'calories_per_oz' => 17.28,
                'protein' => 1.14,
                'total_fat' => 0.52,
                'total_carb' => 14.66,
                'fiber' => 3.00,
                'water' => 83.07
            ],
            [
                'name' => 'Kohlrabi',
                'calories_per_100g' => 27.0,
                'calories_per_oz' => 7.65,
                'protein' => 1.70,
                'total_fat' => 0.10,
                'total_carb' => 6.20,
                'fiber' => 3.60,
                'water' => 91.10
            ],
            [
                'name' => 'Korean BBQ Beef',
                'calories_per_100g' => 242.0,
                'calories_per_oz' => 68.58,
                'protein' => 22.50,
                'total_fat' => 15.30,
                'total_carb' => 3.80,
                'fiber' => 0.20,
                'water' => 56.80
            ],
            [
                'name' => 'Kumquat',
                'calories_per_100g' => 71.0,
                'calories_per_oz' => 20.12,
                'protein' => 1.88,
                'total_fat' => 0.86,
                'total_carb' => 15.90,
                'fiber' => 6.50,
                'water' => 80.85
            ],
            [
                'name' => 'Lamb Chop',
                'calories_per_100g' => 294.0,
                'calories_per_oz' => 83.33,
                'protein' => 24.52,
                'total_fat' => 21.00,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 53.42
            ],
            [
                'name' => 'Leeks',
                'calories_per_100g' => 61.0,
                'calories_per_oz' => 17.28,
                'protein' => 1.50,
                'total_fat' => 0.30,
                'total_carb' => 14.15,
                'fiber' => 1.80,
                'water' => 83.00
            ],
            [
                'name' => 'Lemon',
                'calories_per_100g' => 29.0,
                'calories_per_oz' => 8.22,
                'protein' => 1.10,
                'total_fat' => 0.30,
                'total_carb' => 9.32,
                'fiber' => 2.80,
                'water' => 88.98
            ],
            [
                'name' => 'Lentils',
                'calories_per_100g' => 116.0,
                'calories_per_oz' => 32.88,
                'protein' => 9.02,
                'total_fat' => 0.38,
                'total_carb' => 20.13,
                'fiber' => 7.90,
                'water' => 69.64
            ],
            [
                'name' => 'Lima Beans',
                'calories_per_100g' => 115.0,
                'calories_per_oz' => 32.60,
                'protein' => 7.80,
                'total_fat' => 0.38,
                'total_carb' => 20.88,
                'fiber' => 7.00,
                'water' => 69.75
            ],
            [
                'name' => 'Lime',
                'calories_per_100g' => 30.0,
                'calories_per_oz' => 8.50,
                'protein' => 0.70,
                'total_fat' => 0.20,
                'total_carb' => 10.54,
                'fiber' => 2.80,
                'water' => 88.26
            ],
            [
                'name' => 'Lingonberries',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'protein' => 0.75,
                'total_fat' => 0.34,
                'total_carb' => 11.30,
                'fiber' => 3.30,
                'water' => 87.10
            ],
            [
                'name' => 'Linguine (Cooked)',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'protein' => 5.76,
                'total_fat' => 0.93,
                'total_carb' => 30.86,
                'fiber' => 1.80,
                'water' => 61.80
            ],
            [
                'name' => 'Liver (Beef)',
                'calories_per_100g' => 135.0,
                'calories_per_oz' => 38.27,
                'protein' => 20.36,
                'total_fat' => 3.63,
                'total_carb' => 3.89,
                'fiber' => 0.00,
                'water' => 70.81
            ],
            [
                'name' => 'Lobster',
                'calories_per_100g' => 89.0,
                'calories_per_oz' => 25.23,
                'protein' => 18.80,
                'total_fat' => 0.90,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 79.20
            ],
            [
                'name' => 'London Broil',
                'calories_per_100g' => 213.0,
                'calories_per_oz' => 60.38,
                'protein' => 26.40,
                'total_fat' => 11.95,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 60.50
            ],
            [
                'name' => 'Loquat',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'protein' => 0.43,
                'total_fat' => 0.20,
                'total_carb' => 12.14,
                'fiber' => 1.70,
                'water' => 86.73
            ],
            [
                'name' => 'Lotus Root',
                'calories_per_100g' => 74.0,
                'calories_per_oz' => 20.98,
                'protein' => 2.60,
                'total_fat' => 0.10,
                'total_carb' => 17.23,
                'fiber' => 4.90,
                'water' => 79.10
            ],
            [
                'name' => 'Lychee',
                'calories_per_100g' => 66.0,
                'calories_per_oz' => 18.71,
                'protein' => 0.83,
                'total_fat' => 0.44,
                'total_carb' => 16.53,
                'fiber' => 1.30,
                'water' => 81.76
            ],
            [
                'name' => 'Macadamia Nuts',
                'calories_per_100g' => 718.0,
                'calories_per_oz' => 203.51,
                'protein' => 7.91,
                'total_fat' => 75.77,
                'total_carb' => 13.82,
                'fiber' => 8.60,
                'water' => 1.36
            ],
            [
                'name' => 'Mango',
                'calories_per_100g' => 60.0,
                'calories_per_oz' => 17.01,
                'protein' => 0.82,
                'total_fat' => 0.38,
                'total_carb' => 14.98,
                'fiber' => 1.60,
                'water' => 83.46
            ],
            [
                'name' => 'Maple Syrup',
                'calories_per_100g' => 260.0,
                'calories_per_oz' => 73.71,
                'protein' => 0.00,
                'total_fat' => 0.06,
                'total_carb' => 67.04,
                'fiber' => 0.00,
                'water' => 32.90
            ],
            [
                'name' => 'Mackerel',
                'calories_per_100g' => 205.0,
                'calories_per_oz' => 58.09,
                'protein' => 18.60,
                'total_fat' => 13.89,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 66.10
            ],
            [
                'name' => 'Milk (2%)',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'protein' => 3.30,
                'total_fat' => 2.00,
                'total_carb' => 4.80,
                'fiber' => 0.00,
                'water' => 89.20
            ],
            [
                'name' => 'Mozzarella Cheese',
                'calories_per_100g' => 280.0,
                'calories_per_oz' => 79.38,
                'protein' => 28.00,
                'total_fat' => 17.00,
                'total_carb' => 3.10,
                'fiber' => 0.00,
                'water' => 50.00
            ],
            [
                'name' => 'Mushrooms',
                'calories_per_100g' => 22.0,
                'calories_per_oz' => 6.24,
                'protein' => 3.09,
                'total_fat' => 0.34,
                'total_carb' => 3.28,
                'fiber' => 1.00,
                'water' => 92.45
            ],
            [
                'name' => 'Mussels',
                'calories_per_100g' => 86.0,
                'calories_per_oz' => 24.38,
                'protein' => 11.90,
                'total_fat' => 2.24,
                'total_carb' => 3.69,
                'fiber' => 0.00,
                'water' => 80.58
            ],
            [
                'name' => 'Mustard Greens',
                'calories_per_100g' => 27.0,
                'calories_per_oz' => 7.65,
                'protein' => 2.86,
                'total_fat' => 0.42,
                'total_carb' => 4.67,
                'fiber' => 3.20,
                'water' => 90.70
            ],
            [
                'name' => 'Multigrain Bread',
                'calories_per_100g' => 265.0,
                'calories_per_oz' => 75.11,
                'protein' => 13.00,
                'total_fat' => 4.20,
                'total_carb' => 43.80,
                'fiber' => 6.80,
                'water' => 36.00
            ],
            [
                'name' => 'Mixed Nuts',
                'calories_per_100g' => 576.0,
                'calories_per_oz' => 163.21,
                'protein' => 20.50,
                'total_fat' => 49.10,
                'total_carb' => 21.00,
                'fiber' => 8.30,
                'water' => 4.30
            ],
            [
                'name' => 'Mixed Vegetables',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'protein' => 2.60,
                'total_fat' => 0.40,
                'total_carb' => 9.80,
                'fiber' => 4.00,
                'water' => 86.00
            ],
            [
                'name' => 'Navy Beans',
                'calories_per_100g' => 140.0,
                'calories_per_oz' => 39.69,
                'protein' => 8.23,
                'total_fat' => 0.62,
                'total_carb' => 26.05,
                'fiber' => 10.50,
                'water' => 63.95
            ],
            [
                'name' => 'Naan Bread',
                'calories_per_100g' => 310.0,
                'calories_per_oz' => 87.85,
                'protein' => 9.00,
                'total_fat' => 11.00,
                'total_carb' => 46.00,
                'fiber' => 2.70,
                'water' => 31.80
            ],
            [
                'name' => 'Napa Cabbage',
                'calories_per_100g' => 16.0,
                'calories_per_oz' => 4.54,
                'protein' => 1.20,
                'total_fat' => 0.20,
                'total_carb' => 3.23,
                'fiber' => 1.20,
                'water' => 94.70
            ],
            [
                'name' => 'Nectarine',
                'calories_per_100g' => 44.0,
                'calories_per_oz' => 12.47,
                'protein' => 1.06,
                'total_fat' => 0.32,
                'total_carb' => 10.55,
                'fiber' => 1.70,
                'water' => 87.59
            ],
            [
                'name' => 'New York Strip Steak',
                'calories_per_100g' => 271.0,
                'calories_per_oz' => 76.82,
                'protein' => 25.90,
                'total_fat' => 18.25,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 54.85
            ],
            [
                'name' => 'Nori (Dried Seaweed)',
                'calories_per_100g' => 35.0,
                'calories_per_oz' => 9.92,
                'protein' => 5.81,
                'total_fat' => 0.28,
                'total_carb' => 5.11,
                'fiber' => 0.30,
                'water' => 85.00
            ],
            [
                'name' => 'Nutmeg',
                'calories_per_100g' => 525.0,
                'calories_per_oz' => 148.84,
                'protein' => 5.84,
                'total_fat' => 36.31,
                'total_carb' => 49.29,
                'fiber' => 20.80,
                'water' => 6.23
            ],
            [
                'name' => 'Nuts (Brazil)',
                'calories_per_100g' => 656.0,
                'calories_per_oz' => 185.92,
                'protein' => 14.32,
                'total_fat' => 66.43,
                'total_carb' => 12.27,
                'fiber' => 7.50,
                'water' => 3.48
            ],
            [
                'name' => 'Nuts (Cashews)',
                'calories_per_100g' => 553.0,
                'calories_per_oz' => 156.77,
                'protein' => 18.22,
                'total_fat' => 43.85,
                'total_carb' => 30.19,
                'fiber' => 3.30,
                'water' => 5.20
            ],
            [
                'name' => 'Nuts (Pine)',
                'calories_per_100g' => 673.0,
                'calories_per_oz' => 190.79,
                'protein' => 13.69,
                'total_fat' => 68.37,
                'total_carb' => 13.08,
                'fiber' => 3.70,
                'water' => 2.28
            ],
            [
                'name' => 'Oat Milk',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'protein' => 1.00,
                'total_fat' => 1.50,
                'total_carb' => 7.50,
                'fiber' => 0.70,
                'water' => 89.30
            ],
            [
                'name' => 'Oatmeal (Cooked)',
                'calories_per_100g' => 68.0,
                'calories_per_oz' => 19.27,
                'protein' => 2.40,
                'total_fat' => 1.40,
                'total_carb' => 12.00,
                'fiber' => 1.70,
                'water' => 83.60
            ],
            [
                'name' => 'Octopus',
                'calories_per_100g' => 82.0,
                'calories_per_oz' => 23.25,
                'protein' => 14.91,
                'total_fat' => 1.04,
                'total_carb' => 2.20,
                'fiber' => 0.00,
                'water' => 80.25
            ],
            [
                'name' => 'Okra',
                'calories_per_100g' => 33.0,
                'calories_per_oz' => 9.35,
                'protein' => 1.93,
                'total_fat' => 0.19,
                'total_carb' => 7.45,
                'fiber' => 3.20,
                'water' => 89.58
            ],
            [
                'name' => 'Olive Oil',
                'calories_per_100g' => 884.0,
                'calories_per_oz' => 250.58,
                'protein' => 0.00,
                'total_fat' => 100.00,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 0.00
            ],
            [
                'name' => 'Olives (Green)',
                'calories_per_100g' => 145.0,
                'calories_per_oz' => 41.09,
                'protein' => 1.03,
                'total_fat' => 15.32,
                'total_carb' => 3.84,
                'fiber' => 3.30,
                'water' => 75.26
            ],
            [
                'name' => 'Olives (Black)',
                'calories_per_100g' => 115.0,
                'calories_per_oz' => 32.60,
                'protein' => 0.84,
                'total_fat' => 10.90,
                'total_carb' => 6.26,
                'fiber' => 2.50,
                'water' => 79.99
            ],
            [
                'name' => 'Onion',
                'calories_per_100g' => 40.0,
                'calories_per_oz' => 11.34,
                'protein' => 1.10,
                'total_fat' => 0.10,
                'total_carb' => 9.34,
                'fiber' => 1.70,
                'water' => 89.11
            ],
            [
                'name' => 'Oregano (Dried)',
                'calories_per_100g' => 265.0,
                'calories_per_oz' => 75.11,
                'protein' => 9.00,
                'total_fat' => 4.28,
                'total_carb' => 68.92,
                'fiber' => 42.50,
                'water' => 9.93
            ],
            [
                'name' => 'Oysters',
                'calories_per_100g' => 69.0,
                'calories_per_oz' => 19.56,
                'protein' => 8.13,
                'total_fat' => 2.47,
                'total_carb' => 3.91,
                'fiber' => 0.00,
                'water' => 83.76
            ],
            [
                'name' => 'Orange',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'protein' => 0.94,
                'total_fat' => 0.12,
                'total_carb' => 11.75,
                'fiber' => 2.40,
                'water' => 86.75
            ],
            [
                'name' => 'Pancakes',
                'calories_per_100g' => 227.0,
                'calories_per_oz' => 64.35,
                'protein' => 6.40,
                'total_fat' => 10.20,
                'total_carb' => 28.00,
                'fiber' => 0.90,
                'water' => 53.50
            ],
            [
                'name' => 'Papaya',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.19,
                'protein' => 0.47,
                'total_fat' => 0.26,
                'total_carb' => 10.82,
                'fiber' => 1.70,
                'water' => 88.06
            ],
            [
                'name' => 'Parmesan Cheese',
                'calories_per_100g' => 431.0,
                'calories_per_oz' => 122.15,
                'protein' => 38.46,
                'total_fat' => 28.61,
                'total_carb' => 3.22,
                'fiber' => 0.00,
                'water' => 29.16
            ],
            [
                'name' => 'Pasta (Penne)',
                'calories_per_100g' => 157.0,
                'calories_per_oz' => 44.49,
                'protein' => 5.76,
                'total_fat' => 0.93,
                'total_carb' => 30.86,
                'fiber' => 1.80,
                'water' => 61.80
            ],
            [
                'name' => 'Passion Fruit',
                'calories_per_100g' => 97.0,
                'calories_per_oz' => 27.49,
                'protein' => 2.20,
                'total_fat' => 0.70,
                'total_carb' => 23.38,
                'fiber' => 10.40,
                'water' => 72.93
            ],
            [
                'name' => 'Peach',
                'calories_per_100g' => 39.0,
                'calories_per_oz' => 11.05,
                'protein' => 0.91,
                'total_fat' => 0.25,
                'total_carb' => 9.54,
                'fiber' => 1.50,
                'water' => 88.87
            ],
            [
                'name' => 'Peanut Butter',
                'calories_per_100g' => 588.0,
                'calories_per_oz' => 166.69,
                'protein' => 24.06,
                'total_fat' => 49.94,
                'total_carb' => 21.57,
                'fiber' => 4.80,
                'water' => 1.13
            ],
            [
                'name' => 'Peanuts',
                'calories_per_100g' => 567.0,
                'calories_per_oz' => 160.74,
                'protein' => 25.80,
                'total_fat' => 49.24,
                'total_carb' => 16.13,
                'fiber' => 8.50,
                'water' => 6.50
            ],
            [
                'name' => 'Pear',
                'calories_per_100g' => 57.0,
                'calories_per_oz' => 16.16,
                'protein' => 0.36,
                'total_fat' => 0.14,
                'total_carb' => 15.23,
                'fiber' => 3.10,
                'water' => 83.96
            ],
            [
                'name' => 'Pineapple',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'protein' => 0.54,
                'total_fat' => 0.12,
                'total_carb' => 13.12,
                'fiber' => 1.40,
                'water' => 86.00
            ],
            [
                'name' => 'Pistachios',
                'calories_per_100g' => 562.0,
                'calories_per_oz' => 159.27,
                'protein' => 20.16,
                'total_fat' => 45.32,
                'total_carb' => 27.17,
                'fiber' => 10.60,
                'water' => 4.37
            ],
            [
                'name' => 'Plum',
                'calories_per_100g' => 46.0,
                'calories_per_oz' => 13.04,
                'protein' => 0.70,
                'total_fat' => 0.28,
                'total_carb' => 11.42,
                'fiber' => 1.40,
                'water' => 87.23
            ],
            [
                'name' => 'Pomegranate Seeds',
                'calories_per_100g' => 83.0,
                'calories_per_oz' => 23.53,
                'protein' => 1.67,
                'total_fat' => 1.17,
                'total_carb' => 18.70,
                'fiber' => 4.00,
                'water' => 77.93
            ],
            [
                'name' => 'Quail Eggs',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'protein' => 13.05,
                'total_fat' => 11.09,
                'total_carb' => 0.41,
                'fiber' => 0.00,
                'water' => 74.35
            ],
            [
                'name' => 'Quark Cheese',
                'calories_per_100g' => 68.0,
                'calories_per_oz' => 19.27,
                'protein' => 12.40,
                'total_fat' => 0.20,
                'total_carb' => 4.10,
                'fiber' => 0.00,
                'water' => 82.00
            ],
            [
                'name' => 'Quinoa',
                'calories_per_100g' => 120.0,
                'calories_per_oz' => 34.02,
                'protein' => 4.40,
                'total_fat' => 1.92,
                'total_carb' => 21.30,
                'fiber' => 2.80,
                'water' => 68.90
            ],
            [
                'name' => 'Queso Fresco',
                'calories_per_100g' => 301.0,
                'calories_per_oz' => 85.33,
                'protein' => 22.00,
                'total_fat' => 23.80,
                'total_carb' => 3.40,
                'fiber' => 0.00,
                'water' => 48.90
            ],
            [
                'name' => 'Queso Blanco',
                'calories_per_100g' => 310.0,
                'calories_per_oz' => 87.88,
                'protein' => 21.40,
                'total_fat' => 24.50,
                'total_carb' => 3.20,
                'fiber' => 0.00,
                'water' => 48.90
            ],
            [
                'name' => 'Quesadilla (Cheese)',
                'calories_per_100g' => 242.0,
                'calories_per_oz' => 68.58,
                'protein' => 11.20,
                'total_fat' => 10.60,
                'total_carb' => 26.80,
                'fiber' => 1.30,
                'water' => 49.20
            ],
            [
                'name' => 'Tempeh',
                'calories_per_100g' => 192.0,
                'calories_per_oz' => 54.43,
                'protein' => 20.29,
                'total_fat' => 10.80,
                'total_carb' => 7.64,
                'fiber' => 0.00,
                'water' => 59.65
            ],
            [
                'name' => 'Tofu (Firm)',
                'calories_per_100g' => 144.0,
                'calories_per_oz' => 40.82,
                'protein' => 15.87,
                'total_fat' => 8.72,
                'total_carb' => 2.87,
                'fiber' => 2.30,
                'water' => 70.65
            ],
            [
                'name' => 'Tomato',
                'calories_per_100g' => 18.0,
                'calories_per_oz' => 5.10,
                'protein' => 0.88,
                'total_fat' => 0.20,
                'total_carb' => 3.89,
                'fiber' => 1.20,
                'water' => 94.52
            ],
            [
                'name' => 'Tilapia (Cooked)',
                'calories_per_100g' => 129.0,
                'calories_per_oz' => 36.57,
                'protein' => 26.15,
                'total_fat' => 2.65,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 70.39
            ],
            [
                'name' => 'Tuna (Canned in Water)',
                'calories_per_100g' => 116.0,
                'calories_per_oz' => 32.89,
                'protein' => 25.51,
                'total_fat' => 1.01,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 72.64
            ],
            [
                'name' => 'Turkey Breast (Cooked)',
                'calories_per_100g' => 135.0,
                'calories_per_oz' => 38.27,
                'protein' => 29.81,
                'total_fat' => 1.24,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 67.70
            ],
            [
                'name' => 'Radish',
                'calories_per_100g' => 16.0,
                'calories_per_oz' => 4.54,
                'protein' => 0.68,
                'total_fat' => 0.10,
                'total_carb' => 3.40,
                'fiber' => 1.60,
                'water' => 95.27
            ],
            [
                'name' => 'Raisins',
                'calories_per_100g' => 302.0,
                'calories_per_oz' => 85.61,
                'protein' => 3.07,
                'total_fat' => 0.46,
                'total_carb' => 79.18,
                'fiber' => 3.70,
                'water' => 15.46
            ],
            [
                'name' => 'Raspberries',
                'calories_per_100g' => 52.0,
                'calories_per_oz' => 14.74,
                'protein' => 1.20,
                'total_fat' => 0.65,
                'total_carb' => 11.94,
                'fiber' => 6.50,
                'water' => 85.75
            ],
            [
                'name' => 'Rice (Brown, Cooked)',
                'calories_per_100g' => 123.0,
                'calories_per_oz' => 34.87,
                'protein' => 2.74,
                'total_fat' => 0.97,
                'total_carb' => 25.58,
                'fiber' => 1.60,
                'water' => 68.44
            ],
            [
                'name' => 'Rice (White, Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'protein' => 2.69,
                'total_fat' => 0.28,
                'total_carb' => 28.17,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Ricotta Cheese',
                'calories_per_100g' => 174.0,
                'calories_per_oz' => 49.33,
                'protein' => 11.26,
                'total_fat' => 12.98,
                'total_carb' => 3.04,
                'fiber' => 0.00,
                'water' => 71.70
            ],
            [
                'name' => 'Romaine Lettuce',
                'calories_per_100g' => 17.0,
                'calories_per_oz' => 4.82,
                'protein' => 1.23,
                'total_fat' => 0.30,
                'total_carb' => 3.29,
                'fiber' => 2.10,
                'water' => 94.61
            ],
            [
                'name' => 'Rosemary (Fresh)',
                'calories_per_100g' => 131.0,
                'calories_per_oz' => 37.13,
                'protein' => 3.31,
                'total_fat' => 5.86,
                'total_carb' => 20.70,
                'fiber' => 14.10,
                'water' => 67.77
            ],
            [
                'name' => 'Rutabaga',
                'calories_per_100g' => 37.0,
                'calories_per_oz' => 10.49,
                'protein' => 1.08,
                'total_fat' => 0.16,
                'total_carb' => 8.62,
                'fiber' => 2.30,
                'water' => 89.13
            ],
            [
                'name' => 'Sausage (Italian)',
                'calories_per_100g' => 302.0,
                'calories_per_oz' => 85.61,
                'protein' => 17.40,
                'total_fat' => 25.10,
                'total_carb' => 2.30,
                'fiber' => 0.00,
                'water' => 52.80
            ],
            [
                'name' => 'Scallops',
                'calories_per_100g' => 88.0,
                'calories_per_oz' => 24.94,
                'protein' => 16.78,
                'total_fat' => 0.84,
                'total_carb' => 3.18,
                'fiber' => 0.00,
                'water' => 77.85
            ],
            [
                'name' => 'Shrimp (Cooked)',
                'calories_per_100g' => 99.0,
                'calories_per_oz' => 28.06,
                'protein' => 20.91,
                'total_fat' => 1.73,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 75.86
            ],
            [
                'name' => 'Spinach (Raw)',
                'calories_per_100g' => 23.0,
                'calories_per_oz' => 6.52,
                'protein' => 2.86,
                'total_fat' => 0.39,
                'total_carb' => 3.63,
                'fiber' => 2.20,
                'water' => 91.40
            ],
            [
                'name' => 'Sweet Potato',
                'calories_per_100g' => 86.0,
                'calories_per_oz' => 24.38,
                'protein' => 1.57,
                'total_fat' => 0.05,
                'total_carb' => 20.12,
                'fiber' => 3.00,
                'water' => 77.28
            ],
            [
                'name' => 'Swordfish',
                'calories_per_100g' => 172.0,
                'calories_per_oz' => 48.76,
                'protein' => 20.86,
                'total_fat' => 9.78,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 68.28
            ],
            [
                'name' => 'Soybeans (Cooked)',
                'calories_per_100g' => 172.0,
                'calories_per_oz' => 48.76,
                'protein' => 18.21,
                'total_fat' => 8.97,
                'total_carb' => 8.36,
                'fiber' => 6.00,
                'water' => 62.55
            ],
            [
                'name' => 'Swiss Cheese',
                'calories_per_100g' => 380.0,
                'calories_per_oz' => 107.73,
                'protein' => 26.93,
                'total_fat' => 27.80,
                'total_carb' => 5.38,
                'fiber' => 0.00,
                'water' => 37.10
            ],
            [
                'name' => 'Tahini',
                'calories_per_100g' => 595.0,
                'calories_per_oz' => 168.66,
                'protein' => 17.00,
                'total_fat' => 53.76,
                'total_carb' => 21.19,
                'fiber' => 9.30,
                'water' => 3.00
            ],
            [
                'name' => 'Strawberries',
                'calories_per_100g' => 32.0,
                'calories_per_oz' => 9.07,
                'protein' => 0.67,
                'total_fat' => 0.30,
                'total_carb' => 7.68,
                'fiber' => 2.00,
                'water' => 90.95
            ],
            [
                'name' => 'Sunflower Seeds',
                'calories_per_100g' => 584.0,
                'calories_per_oz' => 165.53,
                'protein' => 20.78,
                'total_fat' => 51.46,
                'total_carb' => 20.00,
                'fiber' => 8.60,
                'water' => 4.73
            ],
            [
                'name' => 'Tamales',
                'calories_per_100g' => 215.0,
                'calories_per_oz' => 60.94,
                'protein' => 5.54,
                'total_fat' => 11.80,
                'total_carb' => 23.44,
                'fiber' => 2.20,
                'water' => 57.20
            ],
            [
                'name' => 'Venison (Cooked)',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'protein' => 30.21,
                'total_fat' => 3.23,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 65.38
            ],
            [
                'name' => 'Tzatziki',
                'calories_per_100g' => 74.0,
                'calories_per_oz' => 20.98,
                'protein' => 2.10,
                'total_fat' => 5.90,
                'total_carb' => 3.70,
                'fiber' => 0.30,
                'water' => 87.30
            ],
            [
                'name' => 'Udon Noodles (Cooked)',
                'calories_per_100g' => 147.0,
                'calories_per_oz' => 41.66,
                'protein' => 4.50,
                'total_fat' => 0.20,
                'total_carb' => 31.20,
                'fiber' => 1.10,
                'water' => 62.80
            ],
            [
                'name' => 'Vermicelli (Cooked)',
                'calories_per_100g' => 157.0,
                'calories_per_oz' => 44.49,
                'protein' => 5.40,
                'total_fat' => 0.30,
                'total_carb' => 31.70,
                'fiber' => 1.80,
                'water' => 60.20
            ],
            [
                'name' => 'Vegetable Broth',
                'calories_per_100g' => 12.0,
                'calories_per_oz' => 3.40,
                'protein' => 0.40,
                'total_fat' => 0.10,
                'total_carb' => 2.40,
                'fiber' => 0.00,
                'water' => 96.80
            ],
            [
                'name' => 'Veal Cutlet',
                'calories_per_100g' => 213.0,
                'calories_per_oz' => 60.38,
                'protein' => 31.90,
                'total_fat' => 8.80,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 58.20
            ],
            [
                'name' => 'Vinegar (Balsamic)',
                'calories_per_100g' => 88.0,
                'calories_per_oz' => 24.95,
                'protein' => 0.49,
                'total_fat' => 0.00,
                'total_carb' => 17.03,
                'fiber' => 0.00,
                'water' => 82.06
            ],
            [
                'name' => 'Vital Wheat Gluten',
                'calories_per_100g' => 370.0,
                'calories_per_oz' => 104.89,
                'protein' => 75.16,
                'total_fat' => 1.85,
                'total_carb' => 13.79,
                'fiber' => 0.60,
                'water' => 6.90
            ],
            [
                'name' => 'Vodka',
                'calories_per_100g' => 231.0,
                'calories_per_oz' => 65.48,
                'protein' => 0.00,
                'total_fat' => 0.00,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 60.00
            ],
            [
                'name' => 'Wasabi',
                'calories_per_100g' => 109.0,
                'calories_per_oz' => 30.90,
                'protein' => 4.80,
                'total_fat' => 0.63,
                'total_carb' => 23.50,
                'fiber' => 7.80,
                'water' => 69.10
            ],
            [
                'name' => 'Water Chestnuts',
                'calories_per_100g' => 97.0,
                'calories_per_oz' => 27.49,
                'protein' => 1.40,
                'total_fat' => 0.10,
                'total_carb' => 23.90,
                'fiber' => 3.00,
                'water' => 73.50
            ],
            [
                'name' => 'Watercress',
                'calories_per_100g' => 11.0,
                'calories_per_oz' => 3.12,
                'protein' => 2.30,
                'total_fat' => 0.10,
                'total_carb' => 1.29,
                'fiber' => 0.50,
                'water' => 95.11
            ],
            [
                'name' => 'Watermelon',
                'calories_per_100g' => 30.0,
                'calories_per_oz' => 8.50,
                'protein' => 0.61,
                'total_fat' => 0.15,
                'total_carb' => 7.55,
                'fiber' => 0.40,
                'water' => 91.45
            ],
            [
                'name' => 'Wheat Bran',
                'calories_per_100g' => 216.0,
                'calories_per_oz' => 61.23,
                'protein' => 15.55,
                'total_fat' => 4.25,
                'total_carb' => 64.51,
                'fiber' => 42.80,
                'water' => 9.89
            ],
            [
                'name' => 'Wheat Germ',
                'calories_per_100g' => 360.0,
                'calories_per_oz' => 102.06,
                'protein' => 23.15,
                'total_fat' => 9.72,
                'total_carb' => 51.80,
                'fiber' => 13.20,
                'water' => 8.89
            ],
            [
                'name' => 'White Rice (Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'protein' => 2.69,
                'total_fat' => 0.28,
                'total_carb' => 28.17,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Whiting Fish (Cooked)',
                'calories_per_100g' => 111.0,
                'calories_per_oz' => 31.47,
                'protein' => 20.81,
                'total_fat' => 2.29,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 75.35
            ],
            [
                'name' => 'Xacuti Curry',
                'calories_per_100g' => 123.0,
                'calories_per_oz' => 34.87,
                'protein' => 4.50,
                'total_fat' => 0.20,
                'total_carb' => 31.20,
                'fiber' => 1.10,
                'water' => 62.80
            ],
            [
                'name' => 'Xigua (Watermelon)',
                'calories_per_100g' => 30.0,
                'calories_per_oz' => 8.50,
                'protein' => 0.61,
                'total_fat' => 0.15,
                'total_carb' => 7.55,
                'fiber' => 0.40,
                'water' => 91.45
            ],
            [
                'name' => 'Ximenia (Wild Plum)',
                'calories_per_100g' => 70.0,
                'calories_per_oz' => 19.84,
                'protein' => 1.20,
                'total_fat' => 0.20,
                'total_carb' => 17.50,
                'fiber' => 2.40,
                'water' => 80.50
            ],
            [
                'name' => 'Yam',
                'calories_per_100g' => 118.0,
                'calories_per_oz' => 33.45,
                'protein' => 1.53,
                'total_fat' => 0.17,
                'total_carb' => 27.88,
                'fiber' => 4.10,
                'water' => 69.60
            ],
            [
                'name' => 'Yardlong Beans',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'protein' => 2.50,
                'total_fat' => 0.20,
                'total_carb' => 10.10,
                'fiber' => 2.80,
                'water' => 89.10
            ],
            [
                'name' => 'Yeast (Nutritional)',
                'calories_per_100g' => 344.0,
                'calories_per_oz' => 97.47,
                'protein' => 50.00,
                'total_fat' => 4.00,
                'total_carb' => 37.00,
                'fiber' => 22.00,
                'water' => 5.00
            ],
            [
                'name' => 'Yellow Squash',
                'calories_per_100g' => 19.0,
                'calories_per_oz' => 5.39,
                'protein' => 1.20,
                'total_fat' => 0.20,
                'total_carb' => 4.40,
                'fiber' => 1.20,
                'water' => 94.20
            ],
            [
                'name' => 'Yogurt (Greek, Plain)',
                'calories_per_100g' => 59.0,
                'calories_per_oz' => 16.72,
                'protein' => 10.19,
                'total_fat' => 0.39,
                'total_carb' => 3.60,
                'fiber' => 0.00,
                'water' => 85.10
            ],
            [
                'name' => 'Yogurt (Regular, Plain)',
                'calories_per_100g' => 61.0,
                'calories_per_oz' => 17.28,
                'protein' => 3.15,
                'total_fat' => 3.25,
                'total_carb' => 4.80,
                'fiber' => 0.00,
                'water' => 88.13
            ],
            [
                'name' => 'Yuzu',
                'calories_per_100g' => 22.0,
                'calories_per_oz' => 6.24,
                'protein' => 1.80,
                'total_fat' => 0.20,
                'total_carb' => 5.30,
                'fiber' => 2.80,
                'water' => 92.10
            ],
            [
                'name' => 'Zinfandel Wine',
                'calories_per_100g' => 85.0,
                'calories_per_oz' => 24.10,
                'protein' => 0.07,
                'total_fat' => 0.00,
                'total_carb' => 2.60,
                'fiber' => 0.00,
                'water' => 87.12
            ],
            [
                'name' => 'Ziti (Cooked)',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'protein' => 5.76,
                'total_fat' => 0.93,
                'total_carb' => 30.86,
                'fiber' => 1.80,
                'water' => 61.80
            ],
            [
                'name' => 'Zucchini',
                'calories_per_100g' => 17.0,
                'calories_per_oz' => 4.82,
                'protein' => 1.20,
                'total_fat' => 0.20,
                'total_carb' => 3.50,
                'fiber' => 1.20,
                'water' => 95.20
            ],
            [
                'name' => 'Za\'atar Spice Mix',
                'calories_per_100g' => 254.0,
                'calories_per_oz' => 72.01,
                'protein' => 7.60,
                'total_fat' => 10.50,
                'total_carb' => 40.20,
                'fiber' => 10.80,
                'water' => 6.90
            ],
            [
                'name' => 'Zebra Fish',
                'calories_per_100g' => 100.0,
                'calories_per_oz' => 28.35,
                'protein' => 20.80,
                'total_fat' => 1.20,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 76.90
            ],
            [
                'name' => 'Zero Calorie Sweetener',
                'calories_per_100g' => 0.0,
                'calories_per_oz' => 0.00,
                'protein' => 0.00,
                'total_fat' => 0.00,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 0.00
            ],
            [
                'name' => 'Zwieback Toast',
                'calories_per_100g' => 394.0,
                'calories_per_oz' => 111.69,
                'protein' => 10.50,
                'total_fat' => 4.30,
                'total_carb' => 73.20,
                'fiber' => 2.40,
                'water' => 7.30
            ],
            [
                'name' => 'Ketchup',
                'calories_per_100g' => 101.0,
                'calories_per_oz' => 28.63,
                'protein' => 1.74,
                'total_fat' => 0.36,
                'total_carb' => 23.59,
                'fiber' => 0.40,
                'water' => 72.90
            ],
            [
                'name' => 'Japanese Noodles (Udon)',
                'calories_per_100g' => 147.0,
                'calories_per_oz' => 41.66,
                'protein' => 4.50,
                'total_fat' => 0.20,
                'total_carb' => 31.20,
                'fiber' => 1.70,
                'water' => 62.40
            ],
            [
                'name' => 'Jasmine Rice (Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'protein' => 2.69,
                'total_fat' => 0.28,
                'total_carb' => 28.59,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Jerusalem Artichoke',
                'calories_per_100g' => 73.0,
                'calories_per_oz' => 20.69,
                'protein' => 2.00,
                'total_fat' => 0.10,
                'total_carb' => 17.44,
                'fiber' => 1.60,
                'water' => 78.90
            ],
            [
                'name' => 'Jicama',
                'calories_per_100g' => 38.0,
                'calories_per_oz' => 10.77,
                'protein' => 0.72,
                'total_fat' => 0.09,
                'total_carb' => 8.82,
                'fiber' => 4.90,
                'water' => 90.10
            ],
            [
                'name' => 'Juice (Grape)',
                'calories_per_100g' => 60.0,
                'calories_per_oz' => 17.01,
                'protein' => 0.37,
                'total_fat' => 0.13,
                'total_carb' => 15.30,
                'fiber' => 0.10,
                'water' => 84.10
            ],
            [
                'name' => 'Juice (Orange)',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'protein' => 0.70,
                'total_fat' => 0.20,
                'total_carb' => 10.40,
                'fiber' => 0.20,
                'water' => 88.30
            ],
            [
                'name' => 'Nopales',
                'calories_per_100g' => 16.0,
                'calories_per_oz' => 4.54,
                'protein' => 1.32,
                'total_fat' => 0.09,
                'total_carb' => 3.33,
                'fiber' => 2.20,
                'water' => 94.00
            ],
            [
                'name' => 'Ketchup',
                'calories_per_100g' => 101.0,
                'calories_per_oz' => 28.63,
                'protein' => 1.74,
                'total_fat' => 0.36,
                'total_carb' => 23.59,
                'fiber' => 0.40,
                'water' => 72.90
            ],
            [
                'name' => 'Japanese Noodles (Udon)',
                'calories_per_100g' => 147.0,
                'calories_per_oz' => 41.66,
                'protein' => 4.50,
                'total_fat' => 0.20,
                'total_carb' => 31.20,
                'fiber' => 1.70,
                'water' => 62.40
            ],
            [
                'name' => 'Jasmine Rice (Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'protein' => 2.69,
                'total_fat' => 0.28,
                'total_carb' => 28.59,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Jerusalem Artichoke',
                'calories_per_100g' => 73.0,
                'calories_per_oz' => 20.69,
                'protein' => 2.00,
                'total_fat' => 0.10,
                'total_carb' => 17.44,
                'fiber' => 1.60,
                'water' => 78.90
            ],
            [
                'name' => 'Jicama',
                'calories_per_100g' => 38.0,
                'calories_per_oz' => 10.77,
                'protein' => 0.72,
                'total_fat' => 0.09,
                'total_carb' => 8.82,
                'fiber' => 4.90,
                'water' => 90.10
            ],
            [
                'name' => 'Juice (Grape)',
                'calories_per_100g' => 60.0,
                'calories_per_oz' => 17.01,
                'protein' => 0.37,
                'total_fat' => 0.13,
                'total_carb' => 15.30,
                'fiber' => 0.10,
                'water' => 84.10
            ],
            [
                'name' => 'Juice (Orange)',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'protein' => 0.70,
                'total_fat' => 0.20,
                'total_carb' => 10.40,
                'fiber' => 0.20,
                'water' => 88.30
            ],
            [
                'name' => 'Noodles (Egg)',
                'calories_per_100g' => 138.0,
                'calories_per_oz' => 39.12,
                'protein' => 4.54,
                'total_fat' => 2.07,
                'total_carb' => 25.00,
                'fiber' => 1.20,
                'water' => 66.89
            ],
            [
                'name' => 'Nutella',
                'calories_per_100g' => 539.0,
                'calories_per_oz' => 152.81,
                'protein' => 6.30,
                'total_fat' => 30.90,
                'total_carb' => 57.50,
                'fiber' => 3.40,
                'water' => 2.00
            ],
            [
                'name' => 'Nutritional Yeast',
                'calories_per_100g' => 344.0,
                'calories_per_oz' => 97.47,
                'protein' => 50.00,
                'total_fat' => 4.00,
                'total_carb' => 37.00,
                'fiber' => 22.00,
                'water' => 5.00
            ],
            [
                'name' => 'Quince',
                'calories_per_100g' => 57.0,
                'calories_per_oz' => 16.16,
                'protein' => 0.40,
                'total_fat' => 0.10,
                'total_carb' => 15.30,
                'fiber' => 1.90,
                'water' => 83.80
            ],
            [
                'name' => 'Vinegar (Balsamic)',
                'calories_per_100g' => 88.0,
                'calories_per_oz' => 24.95,
                'protein' => 0.49,
                'total_fat' => 0.00,
                'total_carb' => 17.03,
                'fiber' => 0.00,
                'water' => 82.06
            ],
            [
                'name' => 'Wakame Seaweed (Raw)',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'protein' => 3.03,
                'total_fat' => 0.64,
                'total_carb' => 9.14,
                'fiber' => 0.50,
                'water' => 85.40
            ],
            [
                'name' => 'Walnuts',
                'calories_per_100g' => 654.0,
                'calories_per_oz' => 185.34,
                'protein' => 15.23,
                'total_fat' => 65.21,
                'total_carb' => 13.71,
                'fiber' => 6.70,
                'water' => 4.07
            ],
            [
                'name' => 'White Wine',
                'calories_per_100g' => 82.0,
                'calories_per_oz' => 23.25,
                'protein' => 0.07,
                'total_fat' => 0.00,
                'total_carb' => 2.60,
                'fiber' => 0.00,
                'water' => 87.12
            ],
            [
                'name' => 'Whitefish',
                'calories_per_100g' => 134.0,
                'calories_per_oz' => 37.99,
                'protein' => 22.40,
                'total_fat' => 4.50,
                'total_carb' => 0.00,
                'fiber' => 0.00,
                'water' => 71.87
            ],
            [
                'name' => 'Whipped Cream',
                'calories_per_100g' => 257.0,
                'calories_per_oz' => 72.85,
                'protein' => 2.17,
                'total_fat' => 27.81,
                'total_carb' => 2.70,
                'fiber' => 0.00,
                'water' => 66.10
            ],
            [
                'name' => 'Wild Rice',
                'calories_per_100g' => 357.0,
                'calories_per_oz' => 101.21,
                'protein' => 14.73,
                'total_fat' => 1.08,
                'total_carb' => 74.90,
                'fiber' => 6.20,
                'water' => 7.32
            ],
        ];

        usort($foodItems, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        foreach ($foodItems as $item) {
            FoodItem::create($item);
        }
    }
}
