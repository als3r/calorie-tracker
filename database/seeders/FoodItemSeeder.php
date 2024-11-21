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
                'proteins' => 2.20,
                'lipids' => 5.30,
                'carbs' => 35.20,
                'fiber' => 2.00,
                'water' => 86.30
            ],
            [
                'name' => 'Almond Butter',
                'calories_per_100g' => 614.0,
                'calories_per_oz' => 174.0,
                'proteins' => 21.00,
                'lipids' => 49.90,
                'carbs' => 21.70,
                'fiber' => 10.50,
                'water' => 1.40
            ],
            [
                'name' => 'Almond Milk',
                'calories_per_100g' => 17.0,
                'calories_per_oz' => 4.82,
                'proteins' => 0.40,
                'lipids' => 1.10,
                'carbs' => 3.30,
                'fiber' => 0.40,
                'water' => 93.80
            ],
            [
                'name' => 'Almonds',
                'calories_per_100g' => 579.0,
                'calories_per_oz' => 164.12,
                'proteins' => 21.15,
                'lipids' => 49.93,
                'carbs' => 21.55,
                'fiber' => 12.50,
                'water' => 4.41
            ],
            [
                'name' => 'Anchovy',
                'calories_per_100g' => 208.0,
                'calories_per_oz' => 58.97,
                'proteins' => 28.62,
                'lipids' => 9.71,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 69.60
            ],
            [
                'name' => 'Apple (Red)',
                'calories_per_100g' => 52.0,
                'calories_per_oz' => 14.74,
                'proteins' => 0.26,
                'lipids' => 0.17,
                'carbs' => 13.81,
                'fiber' => 2.40,
                'water' => 85.56
            ],
            [
                'name' => 'Apricot',
                'calories_per_100g' => 48.0,
                'calories_per_oz' => 13.60,
                'proteins' => 1.40,
                'lipids' => 0.39,
                'carbs' => 11.12,
                'fiber' => 2.00,
                'water' => 86.35
            ],
            [
                'name' => 'Artichoke',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'proteins' => 3.27,
                'lipids' => 0.15,
                'carbs' => 10.51,
                'fiber' => 5.40,
                'water' => 84.94
            ],
            [
                'name' => 'Arugula',
                'calories_per_100g' => 25.0,
                'calories_per_oz' => 7.09,
                'proteins' => 2.58,
                'lipids' => 0.66,
                'carbs' => 3.65,
                'fiber' => 1.60,
                'water' => 91.71
            ],
            [
                'name' => 'Asparagus',
                'calories_per_100g' => 20.0,
                'calories_per_oz' => 5.67,
                'proteins' => 2.20,
                'lipids' => 0.12,
                'carbs' => 3.88,
                'fiber' => 2.10,
                'water' => 93.22
            ],
            [
                'name' => 'Avocado',
                'calories_per_100g' => 160.0,
                'calories_per_oz' => 45.36,
                'proteins' => 2.00,
                'lipids' => 14.66,
                'carbs' => 8.53,
                'fiber' => 6.70,
                'water' => 73.23
            ],
            [
                'name' => 'Bagel (Plain)',
                'calories_per_100g' => 257.0,
                'calories_per_oz' => 72.83,
                'proteins' => 9.00,
                'lipids' => 1.50,
                'carbs' => 50.20,
                'fiber' => 2.10,
                'water' => 37.20
            ],
            [
                'name' => 'Banana',
                'calories_per_100g' => 89.0,
                'calories_per_oz' => 25.22,
                'proteins' => 1.09,
                'lipids' => 0.33,
                'carbs' => 22.84,
                'fiber' => 2.60,
                'water' => 74.91
            ],
            [
                'name' => 'Beef (Ground, 80/20)',
                'calories_per_100g' => 254.0,
                'calories_per_oz' => 71.98,
                'proteins' => 17.17,
                'lipids' => 20.00,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 61.90
            ],
            [
                'name' => 'Beets (Cooked)',
                'calories_per_100g' => 44.0,
                'calories_per_oz' => 12.47,
                'proteins' => 1.68,
                'lipids' => 0.18,
                'carbs' => 9.96,
                'fiber' => 2.00,
                'water' => 87.58
            ],
            [
                'name' => 'Black Beans (Cooked)',
                'calories_per_100g' => 132.0,
                'calories_per_oz' => 37.42,
                'proteins' => 8.86,
                'lipids' => 0.54,
                'carbs' => 23.71,
                'fiber' => 8.70,
                'water' => 65.74
            ],
            [
                'name' => 'Blackberries',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.18,
                'proteins' => 1.39,
                'lipids' => 0.49,
                'carbs' => 9.61,
                'fiber' => 5.30,
                'water' => 88.15
            ],
            [
                'name' => 'Blueberries',
                'calories_per_100g' => 57.0,
                'calories_per_oz' => 16.15,
                'proteins' => 0.74,
                'lipids' => 0.33,
                'carbs' => 14.49,
                'fiber' => 2.40,
                'water' => 84.21
            ],
            [
                'name' => 'Brazil Nuts',
                'calories_per_100g' => 656.0,
                'calories_per_oz' => 185.92,
                'proteins' => 14.32,
                'lipids' => 66.43,
                'carbs' => 12.27,
                'fiber' => 7.50,
                'water' => 3.48
            ],
            [
                'name' => 'Broccoli',
                'calories_per_100g' => 34.0,
                'calories_per_oz' => 9.63,
                'proteins' => 2.82,
                'lipids' => 0.37,
                'carbs' => 6.64,
                'fiber' => 2.60,
                'water' => 89.30
            ],
            [
                'name' => 'Brussels Sprouts',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.18,
                'proteins' => 3.38,
                'lipids' => 0.30,
                'carbs' => 8.95,
                'fiber' => 3.80,
                'water' => 86.00
            ],
            [
                'name' => 'Butter',
                'calories_per_100g' => 717.0,
                'calories_per_oz' => 203.22,
                'proteins' => 0.85,
                'lipids' => 81.11,
                'carbs' => 0.06,
                'fiber' => 0.00,
                'water' => 17.94
            ],
            [
                'name' => 'Butternut Squash',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'proteins' => 1.00,
                'lipids' => 0.10,
                'carbs' => 11.69,
                'fiber' => 2.00,
                'water' => 86.41
            ],
            [
                'name' => 'Carrots (Raw)',
                'calories_per_100g' => 41.0,
                'calories_per_oz' => 11.62,
                'proteins' => 0.93,
                'lipids' => 0.24,
                'carbs' => 9.58,
                'fiber' => 2.80,
                'water' => 88.29
            ],
            [
                'name' => 'Cashews',
                'calories_per_100g' => 553.0,
                'calories_per_oz' => 156.77,
                'proteins' => 18.22,
                'lipids' => 43.85,
                'carbs' => 30.19,
                'fiber' => 3.30,
                'water' => 5.20
            ],
            [
                'name' => 'Cauliflower',
                'calories_per_100g' => 25.0,
                'calories_per_oz' => 7.09,
                'proteins' => 1.92,
                'lipids' => 0.28,
                'carbs' => 4.97,
                'fiber' => 2.00,
                'water' => 92.07
            ],
            [
                'name' => 'Chia Seeds',
                'calories_per_100g' => 486.0,
                'calories_per_oz' => 137.77,
                'proteins' => 16.54,
                'lipids' => 30.74,
                'carbs' => 42.12,
                'fiber' => 34.40,
                'water' => 5.80
            ],
            [
                'name' => 'Chicken Breast',
                'calories_per_100g' => 165.0,
                'calories_per_oz' => 46.75,
                'proteins' => 31.02,
                'lipids' => 3.57,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 65.26
            ],
            [
                'name' => 'Coconut (Fresh)',
                'calories_per_100g' => 354.0,
                'calories_per_oz' => 100.31,
                'proteins' => 3.33,
                'lipids' => 33.49,
                'carbs' => 15.23,
                'fiber' => 9.00,
                'water' => 46.99
            ],
            [
                'name' => 'Corn (Sweet, Cooked)',
                'calories_per_100g' => 96.0,
                'calories_per_oz' => 27.22,
                'proteins' => 3.27,
                'lipids' => 1.35,
                'carbs' => 21.30,
                'fiber' => 2.40,
                'water' => 73.20
            ],
            [
                'name' => 'Cottage Cheese (2%)',
                'calories_per_100g' => 81.0,
                'calories_per_oz' => 22.96,
                'proteins' => 11.12,
                'lipids' => 2.30,
                'carbs' => 3.38,
                'fiber' => 0.00,
                'water' => 82.24
            ],
            [
                'name' => 'Cranberries (Raw)',
                'calories_per_100g' => 46.0,
                'calories_per_oz' => 13.04,
                'proteins' => 0.39,
                'lipids' => 0.13,
                'carbs' => 11.97,
                'fiber' => 4.60,
                'water' => 87.13
            ],
            [
                'name' => 'Cucumber',
                'calories_per_100g' => 15.0,
                'calories_per_oz' => 4.25,
                'proteins' => 0.65,
                'lipids' => 0.11,
                'carbs' => 3.63,
                'fiber' => 0.50,
                'water' => 95.23
            ],
            [
                'name' => 'Deli Turkey',
                'calories_per_100g' => 104.0,
                'calories_per_oz' => 29.47,
                'proteins' => 17.68,
                'lipids' => 2.70,
                'carbs' => 1.32,
                'fiber' => 0.00,
                'water' => 77.50
            ],
            [
                'name' => 'Dried Apricots',
                'calories_per_100g' => 241.0,
                'calories_per_oz' => 68.30,
                'proteins' => 3.39,
                'lipids' => 0.51,
                'carbs' => 62.64,
                'fiber' => 7.30,
                'water' => 30.89
            ],
            [
                'name' => 'Dried Cranberries',
                'calories_per_100g' => 308.0,
                'calories_per_oz' => 87.31,
                'proteins' => 0.17,
                'lipids' => 1.09,
                'carbs' => 82.80,
                'fiber' => 3.60,
                'water' => 15.10
            ],
            [
                'name' => 'Dried Mango',
                'calories_per_100g' => 319.0,
                'calories_per_oz' => 90.41,
                'proteins' => 1.32,
                'lipids' => 1.18,
                'carbs' => 78.57,
                'fiber' => 3.70,
                'water' => 18.20
            ],
            [
                'name' => 'Dried Seaweed',
                'calories_per_100g' => 349.0,
                'calories_per_oz' => 98.89,
                'proteins' => 5.81,
                'lipids' => 1.64,
                'carbs' => 81.37,
                'fiber' => 0.50,
                'water' => 7.39
            ],
            [
                'name' => 'Egg',
                'calories_per_100g' => 155.0,
                'calories_per_oz' => 43.94,
                'proteins' => 12.58,
                'lipids' => 10.61,
                'carbs' => 1.12,
                'fiber' => 0.00,
                'water' => 74.62
            ],
            [
                'name' => 'Egg Noodles',
                'calories_per_100g' => 384.0,
                'calories_per_oz' => 108.82,
                'proteins' => 14.16,
                'lipids' => 4.44,
                'carbs' => 71.27,
                'fiber' => 3.30,
                'water' => 8.52
            ],
            [
                'name' => 'Egg Whites',
                'calories_per_100g' => 52.0,
                'calories_per_oz' => 14.74,
                'proteins' => 10.90,
                'lipids' => 0.17,
                'carbs' => 0.73,
                'fiber' => 0.00,
                'water' => 87.57
            ],
            [
                'name' => 'Egg Yolk',
                'calories_per_100g' => 322.0,
                'calories_per_oz' => 91.26,
                'proteins' => 15.86,
                'lipids' => 26.54,
                'carbs' => 3.59,
                'fiber' => 0.00,
                'water' => 52.31
            ],
            [
                'name' => 'Eggplant',
                'calories_per_100g' => 25.0,
                'calories_per_oz' => 7.09,
                'proteins' => 0.98,
                'lipids' => 0.18,
                'carbs' => 5.88,
                'fiber' => 3.00,
                'water' => 92.30
            ],
            [
                'name' => 'Edamame',
                'calories_per_100g' => 122.0,
                'calories_per_oz' => 34.58,
                'proteins' => 11.91,
                'lipids' => 5.20,
                'carbs' => 9.94,
                'fiber' => 5.20,
                'water' => 72.10
            ],
            [
                'name' => 'Emmental Cheese',
                'calories_per_100g' => 379.0,
                'calories_per_oz' => 107.43,
                'proteins' => 27.32,
                'lipids' => 29.68,
                'carbs' => 1.44,
                'fiber' => 0.00,
                'water' => 37.30
            ],
            [
                'name' => 'English Muffin',
                'calories_per_100g' => 227.0,
                'calories_per_oz' => 64.34,
                'proteins' => 8.50,
                'lipids' => 1.84,
                'carbs' => 44.70,
                'fiber' => 2.30,
                'water' => 42.80
            ],
            [
                'name' => 'Feta Cheese',
                'calories_per_100g' => 264.0,
                'calories_per_oz' => 74.82,
                'proteins' => 14.21,
                'lipids' => 21.28,
                'carbs' => 4.09,
                'fiber' => 0.00,
                'water' => 55.22
            ],
            [
                'name' => 'Flax Seeds',
                'calories_per_100g' => 534.0,
                'calories_per_oz' => 151.39,
                'proteins' => 18.29,
                'lipids' => 42.16,
                'carbs' => 28.88,
                'fiber' => 27.30,
                'water' => 6.96
            ],
            [
                'name' => 'French Bread',
                'calories_per_100g' => 274.0,
                'calories_per_oz' => 77.65,
                'proteins' => 9.00,
                'lipids' => 3.40,
                'carbs' => 50.61,
                'fiber' => 3.00,
                'water' => 34.30
            ],
            [
                'name' => 'Fresh Salmon',
                'calories_per_100g' => 208.0,
                'calories_per_oz' => 58.97,
                'proteins' => 20.42,
                'lipids' => 13.42,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 64.89
            ],
            [
                'name' => 'Garlic',
                'calories_per_100g' => 149.0,
                'calories_per_oz' => 42.23,
                'proteins' => 6.36,
                'lipids' => 0.50,
                'carbs' => 33.06,
                'fiber' => 2.10,
                'water' => 58.58
            ],
            [
                'name' => 'Ginger Root',
                'calories_per_100g' => 80.0,
                'calories_per_oz' => 22.68,
                'proteins' => 1.82,
                'lipids' => 0.75,
                'carbs' => 17.77,
                'fiber' => 2.00,
                'water' => 78.89
            ],
            [
                'name' => 'Granola',
                'calories_per_100g' => 412.0,
                'calories_per_oz' => 116.77,
                'proteins' => 8.50,
                'lipids' => 12.50,
                'carbs' => 69.40,
                'fiber' => 6.80,
                'water' => 5.30
            ],
            [
                'name' => 'Grapes',
                'calories_per_100g' => 69.0,
                'calories_per_oz' => 19.56,
                'proteins' => 0.72,
                'lipids' => 0.16,
                'carbs' => 18.10,
                'fiber' => 0.90,
                'water' => 80.54
            ],
            [
                'name' => 'Greek Yogurt',
                'calories_per_100g' => 59.0,
                'calories_per_oz' => 16.72,
                'proteins' => 10.19,
                'lipids' => 0.39,
                'carbs' => 3.60,
                'fiber' => 0.00,
                'water' => 85.10
            ],
            [
                'name' => 'Green Beans',
                'calories_per_100g' => 31.0,
                'calories_per_oz' => 8.79,
                'proteins' => 1.83,
                'lipids' => 0.22,
                'carbs' => 7.13,
                'fiber' => 3.40,
                'water' => 89.80
            ],
            [
                'name' => 'Green Peas',
                'calories_per_100g' => 81.0,
                'calories_per_oz' => 22.96,
                'proteins' => 5.42,
                'lipids' => 0.40,
                'carbs' => 14.45,
                'fiber' => 5.70,
                'water' => 78.86
            ],
            [
                'name' => 'Ground Beef (80/20)',
                'calories_per_100g' => 254.0,
                'calories_per_oz' => 71.99,
                'proteins' => 17.17,
                'lipids' => 20.00,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 61.30
            ],
            [
                'name' => 'Ground Turkey',
                'calories_per_100g' => 190.0,
                'calories_per_oz' => 53.86,
                'proteins' => 19.66,
                'lipids' => 11.70,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 67.98
            ],
            [
                'name' => 'Halibut',
                'calories_per_100g' => 111.0,
                'calories_per_oz' => 31.47,
                'proteins' => 20.81,
                'lipids' => 2.29,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 75.35
            ],
            [
                'name' => 'Ham (Cooked)',
                'calories_per_100g' => 145.0,
                'calories_per_oz' => 41.10,
                'proteins' => 21.82,
                'lipids' => 5.53,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 71.30
            ],
            [
                'name' => 'Honey',
                'calories_per_100g' => 304.0,
                'calories_per_oz' => 86.16,
                'proteins' => 0.30,
                'lipids' => 0.00,
                'carbs' => 82.40,
                'fiber' => 0.20,
                'water' => 17.10
            ],
            [
                'name' => 'Hummus',
                'calories_per_100g' => 177.0,
                'calories_per_oz' => 50.17,
                'proteins' => 4.86,
                'lipids' => 8.59,
                'carbs' => 20.12,
                'fiber' => 4.00,
                'water' => 65.10
            ],
            [
                'name' => 'Ice Cream (Vanilla)',
                'calories_per_100g' => 207.0,
                'calories_per_oz' => 58.67,
                'proteins' => 3.50,
                'lipids' => 11.00,
                'carbs' => 23.60,
                'fiber' => 0.70,
                'water' => 60.50
            ],
            [
                'name' => 'Iceberg Lettuce',
                'calories_per_100g' => 14.0,
                'calories_per_oz' => 3.97,
                'proteins' => 0.90,
                'lipids' => 0.14,
                'carbs' => 2.97,
                'fiber' => 1.20,
                'water' => 95.64
            ],
            [
                'name' => 'Instant Noodles',
                'calories_per_100g' => 437.0,
                'calories_per_oz' => 123.85,
                'proteins' => 9.00,
                'lipids' => 17.20,
                'carbs' => 62.10,
                'fiber' => 2.30,
                'water' => 8.00
            ],
            [
                'name' => 'Instant Rice',
                'calories_per_100g' => 357.0,
                'calories_per_oz' => 101.17,
                'proteins' => 7.13,
                'lipids' => 0.58,
                'carbs' => 79.34,
                'fiber' => 1.40,
                'water' => 10.50
            ],
            [
                'name' => 'Italian Bread',
                'calories_per_100g' => 227.0,
                'calories_per_oz' => 64.34,
                'proteins' => 8.50,
                'lipids' => 1.84,
                'carbs' => 44.70,
                'fiber' => 2.30,
                'water' => 42.80
            ],
            [
                'name' => 'Italian Dressing',
                'calories_per_100g' => 248.0,
                'calories_per_oz' => 70.31,
                'proteins' => 0.70,
                'lipids' => 24.30,
                'carbs' => 8.70,
                'fiber' => 0.00,
                'water' => 65.20
            ],
            [
                'name' => 'Italian Sausage',
                'calories_per_100g' => 302.0,
                'calories_per_oz' => 85.61,
                'proteins' => 17.40,
                'lipids' => 25.10,
                'carbs' => 2.30,
                'fiber' => 0.00,
                'water' => 52.80
            ],
            [
                'name' => 'Irish Cream',
                'calories_per_100g' => 327.0,
                'calories_per_oz' => 92.69,
                'proteins' => 3.50,
                'lipids' => 13.70,
                'carbs' => 25.80,
                'fiber' => 0.00,
                'water' => 55.00
            ],
            [
                'name' => 'Irish Whiskey',
                'calories_per_100g' => 270.0,
                'calories_per_oz' => 76.50,
                'proteins' => 0.00,
                'lipids' => 0.00,
                'carbs' => 0.10,
                'fiber' => 0.00,
                'water' => 99.90
            ],
            [
                'name' => 'Jackfruit',
                'calories_per_100g' => 95.0,
                'calories_per_oz' => 26.93,
                'proteins' => 1.72,
                'lipids' => 0.64,
                'carbs' => 23.25,
                'fiber' => 1.50,
                'water' => 73.23
            ],
            [
                'name' => 'Jalapeno Pepper',
                'calories_per_100g' => 28.0,
                'calories_per_oz' => 7.93,
                'proteins' => 0.91,
                'lipids' => 0.37,
                'carbs' => 6.50,
                'fiber' => 2.80,
                'water' => 90.95
            ],
            [
                'name' => 'Jelly',
                'calories_per_100g' => 278.0,
                'calories_per_oz' => 78.78,
                'proteins' => 0.00,
                'lipids' => 0.00,
                'carbs' => 69.50,
                'fiber' => 0.30,
                'water' => 30.20
            ],
            [
                'name' => 'Juice (Apple)',
                'calories_per_100g' => 46.0,
                'calories_per_oz' => 13.04,
                'proteins' => 0.10,
                'lipids' => 0.13,
                'carbs' => 11.30,
                'fiber' => 0.20,
                'water' => 88.27
            ],
            [
                'name' => 'Kale',
                'calories_per_100g' => 49.0,
                'calories_per_oz' => 13.89,
                'proteins' => 4.28,
                'lipids' => 0.93,
                'carbs' => 8.75,
                'fiber' => 3.60,
                'water' => 84.46
            ],
            [
                'name' => 'Kamut (Cooked)',
                'calories_per_100g' => 146.0,
                'calories_per_oz' => 41.37,
                'proteins' => 6.35,
                'lipids' => 0.69,
                'carbs' => 30.45,
                'fiber' => 3.20,
                'water' => 61.50
            ],
            [
                'name' => 'Kelp (Raw)',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.18,
                'proteins' => 1.68,
                'lipids' => 0.56,
                'carbs' => 9.57,
                'fiber' => 1.30,
                'water' => 85.90
            ],
            [
                'name' => 'Kidney Beans',
                'calories_per_100g' => 127.0,
                'calories_per_oz' => 36.00,
                'proteins' => 8.67,
                'lipids' => 0.50,
                'carbs' => 22.80,
                'fiber' => 6.40,
                'water' => 66.94
            ],
            [
                'name' => 'Kiwi',
                'calories_per_100g' => 61.0,
                'calories_per_oz' => 17.28,
                'proteins' => 1.14,
                'lipids' => 0.52,
                'carbs' => 14.66,
                'fiber' => 3.00,
                'water' => 83.07
            ],
            [
                'name' => 'Kohlrabi',
                'calories_per_100g' => 27.0,
                'calories_per_oz' => 7.65,
                'proteins' => 1.70,
                'lipids' => 0.10,
                'carbs' => 6.20,
                'fiber' => 3.60,
                'water' => 91.10
            ],
            [
                'name' => 'Korean BBQ Beef',
                'calories_per_100g' => 242.0,
                'calories_per_oz' => 68.58,
                'proteins' => 22.50,
                'lipids' => 15.30,
                'carbs' => 3.80,
                'fiber' => 0.20,
                'water' => 56.80
            ],
            [
                'name' => 'Kumquat',
                'calories_per_100g' => 71.0,
                'calories_per_oz' => 20.12,
                'proteins' => 1.88,
                'lipids' => 0.86,
                'carbs' => 15.90,
                'fiber' => 6.50,
                'water' => 80.85
            ],
            [
                'name' => 'Lamb Chop',
                'calories_per_100g' => 294.0,
                'calories_per_oz' => 83.33,
                'proteins' => 24.52,
                'lipids' => 21.00,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 53.42
            ],
            [
                'name' => 'Leeks',
                'calories_per_100g' => 61.0,
                'calories_per_oz' => 17.28,
                'proteins' => 1.50,
                'lipids' => 0.30,
                'carbs' => 14.15,
                'fiber' => 1.80,
                'water' => 83.00
            ],
            [
                'name' => 'Lemon',
                'calories_per_100g' => 29.0,
                'calories_per_oz' => 8.22,
                'proteins' => 1.10,
                'lipids' => 0.30,
                'carbs' => 9.32,
                'fiber' => 2.80,
                'water' => 88.98
            ],
            [
                'name' => 'Lentils',
                'calories_per_100g' => 116.0,
                'calories_per_oz' => 32.88,
                'proteins' => 9.02,
                'lipids' => 0.38,
                'carbs' => 20.13,
                'fiber' => 7.90,
                'water' => 69.64
            ],
            [
                'name' => 'Lima Beans',
                'calories_per_100g' => 115.0,
                'calories_per_oz' => 32.60,
                'proteins' => 7.80,
                'lipids' => 0.38,
                'carbs' => 20.88,
                'fiber' => 7.00,
                'water' => 69.75
            ],
            [
                'name' => 'Lime',
                'calories_per_100g' => 30.0,
                'calories_per_oz' => 8.50,
                'proteins' => 0.70,
                'lipids' => 0.20,
                'carbs' => 10.54,
                'fiber' => 2.80,
                'water' => 88.26
            ],
            [
                'name' => 'Lingonberries',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'proteins' => 0.75,
                'lipids' => 0.34,
                'carbs' => 11.30,
                'fiber' => 3.30,
                'water' => 87.10
            ],
            [
                'name' => 'Linguine (Cooked)',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'proteins' => 5.76,
                'lipids' => 0.93,
                'carbs' => 30.86,
                'fiber' => 1.80,
                'water' => 61.80
            ],
            [
                'name' => 'Liver (Beef)',
                'calories_per_100g' => 135.0,
                'calories_per_oz' => 38.27,
                'proteins' => 20.36,
                'lipids' => 3.63,
                'carbs' => 3.89,
                'fiber' => 0.00,
                'water' => 70.81
            ],
            [
                'name' => 'Lobster',
                'calories_per_100g' => 89.0,
                'calories_per_oz' => 25.23,
                'proteins' => 18.80,
                'lipids' => 0.90,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 79.20
            ],
            [
                'name' => 'London Broil',
                'calories_per_100g' => 213.0,
                'calories_per_oz' => 60.38,
                'proteins' => 26.40,
                'lipids' => 11.95,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 60.50
            ],
            [
                'name' => 'Loquat',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'proteins' => 0.43,
                'lipids' => 0.20,
                'carbs' => 12.14,
                'fiber' => 1.70,
                'water' => 86.73
            ],
            [
                'name' => 'Lotus Root',
                'calories_per_100g' => 74.0,
                'calories_per_oz' => 20.98,
                'proteins' => 2.60,
                'lipids' => 0.10,
                'carbs' => 17.23,
                'fiber' => 4.90,
                'water' => 79.10
            ],
            [
                'name' => 'Lychee',
                'calories_per_100g' => 66.0,
                'calories_per_oz' => 18.71,
                'proteins' => 0.83,
                'lipids' => 0.44,
                'carbs' => 16.53,
                'fiber' => 1.30,
                'water' => 81.76
            ],
            [
                'name' => 'Macadamia Nuts',
                'calories_per_100g' => 718.0,
                'calories_per_oz' => 203.51,
                'proteins' => 7.91,
                'lipids' => 75.77,
                'carbs' => 13.82,
                'fiber' => 8.60,
                'water' => 1.36
            ],
            [
                'name' => 'Mango',
                'calories_per_100g' => 60.0,
                'calories_per_oz' => 17.01,
                'proteins' => 0.82,
                'lipids' => 0.38,
                'carbs' => 14.98,
                'fiber' => 1.60,
                'water' => 83.46
            ],
            [
                'name' => 'Maple Syrup',
                'calories_per_100g' => 260.0,
                'calories_per_oz' => 73.71,
                'proteins' => 0.00,
                'lipids' => 0.06,
                'carbs' => 67.04,
                'fiber' => 0.00,
                'water' => 32.90
            ],
            [
                'name' => 'Mackerel',
                'calories_per_100g' => 205.0,
                'calories_per_oz' => 58.09,
                'proteins' => 18.60,
                'lipids' => 13.89,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 66.10
            ],
            [
                'name' => 'Milk (2%)',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'proteins' => 3.30,
                'lipids' => 2.00,
                'carbs' => 4.80,
                'fiber' => 0.00,
                'water' => 89.20
            ],
            [
                'name' => 'Mozzarella Cheese',
                'calories_per_100g' => 280.0,
                'calories_per_oz' => 79.38,
                'proteins' => 28.00,
                'lipids' => 17.00,
                'carbs' => 3.10,
                'fiber' => 0.00,
                'water' => 50.00
            ],
            [
                'name' => 'Mushrooms',
                'calories_per_100g' => 22.0,
                'calories_per_oz' => 6.24,
                'proteins' => 3.09,
                'lipids' => 0.34,
                'carbs' => 3.28,
                'fiber' => 1.00,
                'water' => 92.45
            ],
            [
                'name' => 'Mussels',
                'calories_per_100g' => 86.0,
                'calories_per_oz' => 24.38,
                'proteins' => 11.90,
                'lipids' => 2.24,
                'carbs' => 3.69,
                'fiber' => 0.00,
                'water' => 80.58
            ],
            [
                'name' => 'Mustard Greens',
                'calories_per_100g' => 27.0,
                'calories_per_oz' => 7.65,
                'proteins' => 2.86,
                'lipids' => 0.42,
                'carbs' => 4.67,
                'fiber' => 3.20,
                'water' => 90.70
            ],
            [
                'name' => 'Multigrain Bread',
                'calories_per_100g' => 265.0,
                'calories_per_oz' => 75.11,
                'proteins' => 13.00,
                'lipids' => 4.20,
                'carbs' => 43.80,
                'fiber' => 6.80,
                'water' => 36.00
            ],
            [
                'name' => 'Mixed Nuts',
                'calories_per_100g' => 576.0,
                'calories_per_oz' => 163.21,
                'proteins' => 20.50,
                'lipids' => 49.10,
                'carbs' => 21.00,
                'fiber' => 8.30,
                'water' => 4.30
            ],
            [
                'name' => 'Mixed Vegetables',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'proteins' => 2.60,
                'lipids' => 0.40,
                'carbs' => 9.80,
                'fiber' => 4.00,
                'water' => 86.00
            ],
            [
                'name' => 'Navy Beans',
                'calories_per_100g' => 140.0,
                'calories_per_oz' => 39.69,
                'proteins' => 8.23,
                'lipids' => 0.62,
                'carbs' => 26.05,
                'fiber' => 10.50,
                'water' => 63.95
            ],
            [
                'name' => 'Naan Bread',
                'calories_per_100g' => 310.0,
                'calories_per_oz' => 87.85,
                'proteins' => 9.00,
                'lipids' => 11.00,
                'carbs' => 46.00,
                'fiber' => 2.70,
                'water' => 31.80
            ],
            [
                'name' => 'Napa Cabbage',
                'calories_per_100g' => 16.0,
                'calories_per_oz' => 4.54,
                'proteins' => 1.20,
                'lipids' => 0.20,
                'carbs' => 3.23,
                'fiber' => 1.20,
                'water' => 94.70
            ],
            [
                'name' => 'Nectarine',
                'calories_per_100g' => 44.0,
                'calories_per_oz' => 12.47,
                'proteins' => 1.06,
                'lipids' => 0.32,
                'carbs' => 10.55,
                'fiber' => 1.70,
                'water' => 87.59
            ],
            [
                'name' => 'New York Strip Steak',
                'calories_per_100g' => 271.0,
                'calories_per_oz' => 76.82,
                'proteins' => 25.90,
                'lipids' => 18.25,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 54.85
            ],
            [
                'name' => 'Nori (Dried Seaweed)',
                'calories_per_100g' => 35.0,
                'calories_per_oz' => 9.92,
                'proteins' => 5.81,
                'lipids' => 0.28,
                'carbs' => 5.11,
                'fiber' => 0.30,
                'water' => 85.00
            ],
            [
                'name' => 'Nutmeg',
                'calories_per_100g' => 525.0,
                'calories_per_oz' => 148.84,
                'proteins' => 5.84,
                'lipids' => 36.31,
                'carbs' => 49.29,
                'fiber' => 20.80,
                'water' => 6.23
            ],
            [
                'name' => 'Nuts (Brazil)',
                'calories_per_100g' => 656.0,
                'calories_per_oz' => 185.92,
                'proteins' => 14.32,
                'lipids' => 66.43,
                'carbs' => 12.27,
                'fiber' => 7.50,
                'water' => 3.48
            ],
            [
                'name' => 'Nuts (Cashews)',
                'calories_per_100g' => 553.0,
                'calories_per_oz' => 156.77,
                'proteins' => 18.22,
                'lipids' => 43.85,
                'carbs' => 30.19,
                'fiber' => 3.30,
                'water' => 5.20
            ],
            [
                'name' => 'Nuts (Pine)',
                'calories_per_100g' => 673.0,
                'calories_per_oz' => 190.79,
                'proteins' => 13.69,
                'lipids' => 68.37,
                'carbs' => 13.08,
                'fiber' => 3.70,
                'water' => 2.28
            ],
            [
                'name' => 'Oat Milk',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'proteins' => 1.00,
                'lipids' => 1.50,
                'carbs' => 7.50,
                'fiber' => 0.70,
                'water' => 89.30
            ],
            [
                'name' => 'Oatmeal (Cooked)',
                'calories_per_100g' => 68.0,
                'calories_per_oz' => 19.27,
                'proteins' => 2.40,
                'lipids' => 1.40,
                'carbs' => 12.00,
                'fiber' => 1.70,
                'water' => 83.60
            ],
            [
                'name' => 'Octopus',
                'calories_per_100g' => 82.0,
                'calories_per_oz' => 23.25,
                'proteins' => 14.91,
                'lipids' => 1.04,
                'carbs' => 2.20,
                'fiber' => 0.00,
                'water' => 80.25
            ],
            [
                'name' => 'Okra',
                'calories_per_100g' => 33.0,
                'calories_per_oz' => 9.35,
                'proteins' => 1.93,
                'lipids' => 0.19,
                'carbs' => 7.45,
                'fiber' => 3.20,
                'water' => 89.58
            ],
            [
                'name' => 'Olive Oil',
                'calories_per_100g' => 884.0,
                'calories_per_oz' => 250.58,
                'proteins' => 0.00,
                'lipids' => 100.00,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 0.00
            ],
            [
                'name' => 'Olives (Green)',
                'calories_per_100g' => 145.0,
                'calories_per_oz' => 41.09,
                'proteins' => 1.03,
                'lipids' => 15.32,
                'carbs' => 3.84,
                'fiber' => 3.30,
                'water' => 75.26
            ],
            [
                'name' => 'Olives (Black)',
                'calories_per_100g' => 115.0,
                'calories_per_oz' => 32.60,
                'proteins' => 0.84,
                'lipids' => 10.90,
                'carbs' => 6.26,
                'fiber' => 2.50,
                'water' => 79.99
            ],
            [
                'name' => 'Onion',
                'calories_per_100g' => 40.0,
                'calories_per_oz' => 11.34,
                'proteins' => 1.10,
                'lipids' => 0.10,
                'carbs' => 9.34,
                'fiber' => 1.70,
                'water' => 89.11
            ],
            [
                'name' => 'Oregano (Dried)',
                'calories_per_100g' => 265.0,
                'calories_per_oz' => 75.11,
                'proteins' => 9.00,
                'lipids' => 4.28,
                'carbs' => 68.92,
                'fiber' => 42.50,
                'water' => 9.93
            ],
            [
                'name' => 'Oysters',
                'calories_per_100g' => 69.0,
                'calories_per_oz' => 19.56,
                'proteins' => 8.13,
                'lipids' => 2.47,
                'carbs' => 3.91,
                'fiber' => 0.00,
                'water' => 83.76
            ],
            [
                'name' => 'Orange',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'proteins' => 0.94,
                'lipids' => 0.12,
                'carbs' => 11.75,
                'fiber' => 2.40,
                'water' => 86.75
            ],
            [
                'name' => 'Pancakes',
                'calories_per_100g' => 227.0,
                'calories_per_oz' => 64.35,
                'proteins' => 6.40,
                'lipids' => 10.20,
                'carbs' => 28.00,
                'fiber' => 0.90,
                'water' => 53.50
            ],
            [
                'name' => 'Papaya',
                'calories_per_100g' => 43.0,
                'calories_per_oz' => 12.19,
                'proteins' => 0.47,
                'lipids' => 0.26,
                'carbs' => 10.82,
                'fiber' => 1.70,
                'water' => 88.06
            ],
            [
                'name' => 'Parmesan Cheese',
                'calories_per_100g' => 431.0,
                'calories_per_oz' => 122.15,
                'proteins' => 38.46,
                'lipids' => 28.61,
                'carbs' => 3.22,
                'fiber' => 0.00,
                'water' => 29.16
            ],
            [
                'name' => 'Pasta (Penne)',
                'calories_per_100g' => 157.0,
                'calories_per_oz' => 44.49,
                'proteins' => 5.76,
                'lipids' => 0.93,
                'carbs' => 30.86,
                'fiber' => 1.80,
                'water' => 61.80
            ],
            [
                'name' => 'Passion Fruit',
                'calories_per_100g' => 97.0,
                'calories_per_oz' => 27.49,
                'proteins' => 2.20,
                'lipids' => 0.70,
                'carbs' => 23.38,
                'fiber' => 10.40,
                'water' => 72.93
            ],
            [
                'name' => 'Peach',
                'calories_per_100g' => 39.0,
                'calories_per_oz' => 11.05,
                'proteins' => 0.91,
                'lipids' => 0.25,
                'carbs' => 9.54,
                'fiber' => 1.50,
                'water' => 88.87
            ],
            [
                'name' => 'Peanut Butter',
                'calories_per_100g' => 588.0,
                'calories_per_oz' => 166.69,
                'proteins' => 24.06,
                'lipids' => 49.94,
                'carbs' => 21.57,
                'fiber' => 4.80,
                'water' => 1.13
            ],
            [
                'name' => 'Peanuts',
                'calories_per_100g' => 567.0,
                'calories_per_oz' => 160.74,
                'proteins' => 25.80,
                'lipids' => 49.24,
                'carbs' => 16.13,
                'fiber' => 8.50,
                'water' => 6.50
            ],
            [
                'name' => 'Pear',
                'calories_per_100g' => 57.0,
                'calories_per_oz' => 16.16,
                'proteins' => 0.36,
                'lipids' => 0.14,
                'carbs' => 15.23,
                'fiber' => 3.10,
                'water' => 83.96
            ],
            [
                'name' => 'Pineapple',
                'calories_per_100g' => 50.0,
                'calories_per_oz' => 14.17,
                'proteins' => 0.54,
                'lipids' => 0.12,
                'carbs' => 13.12,
                'fiber' => 1.40,
                'water' => 86.00
            ],
            [
                'name' => 'Pistachios',
                'calories_per_100g' => 562.0,
                'calories_per_oz' => 159.27,
                'proteins' => 20.16,
                'lipids' => 45.32,
                'carbs' => 27.17,
                'fiber' => 10.60,
                'water' => 4.37
            ],
            [
                'name' => 'Plum',
                'calories_per_100g' => 46.0,
                'calories_per_oz' => 13.04,
                'proteins' => 0.70,
                'lipids' => 0.28,
                'carbs' => 11.42,
                'fiber' => 1.40,
                'water' => 87.23
            ],
            [
                'name' => 'Pomegranate Seeds',
                'calories_per_100g' => 83.0,
                'calories_per_oz' => 23.53,
                'proteins' => 1.67,
                'lipids' => 1.17,
                'carbs' => 18.70,
                'fiber' => 4.00,
                'water' => 77.93
            ],
            [
                'name' => 'Quail Eggs',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'proteins' => 13.05,
                'lipids' => 11.09,
                'carbs' => 0.41,
                'fiber' => 0.00,
                'water' => 74.35
            ],
            [
                'name' => 'Quark Cheese',
                'calories_per_100g' => 68.0,
                'calories_per_oz' => 19.27,
                'proteins' => 12.40,
                'lipids' => 0.20,
                'carbs' => 4.10,
                'fiber' => 0.00,
                'water' => 82.00
            ],
            [
                'name' => 'Quinoa',
                'calories_per_100g' => 120.0,
                'calories_per_oz' => 34.02,
                'proteins' => 4.40,
                'lipids' => 1.92,
                'carbs' => 21.30,
                'fiber' => 2.80,
                'water' => 68.90
            ],
            [
                'name' => 'Queso Fresco',
                'calories_per_100g' => 301.0,
                'calories_per_oz' => 85.33,
                'proteins' => 22.00,
                'lipids' => 23.80,
                'carbs' => 3.40,
                'fiber' => 0.00,
                'water' => 48.90
            ],
            [
                'name' => 'Queso Blanco',
                'calories_per_100g' => 310.0,
                'calories_per_oz' => 87.88,
                'proteins' => 21.40,
                'lipids' => 24.50,
                'carbs' => 3.20,
                'fiber' => 0.00,
                'water' => 48.90
            ],
            [
                'name' => 'Quesadilla (Cheese)',
                'calories_per_100g' => 242.0,
                'calories_per_oz' => 68.58,
                'proteins' => 11.20,
                'lipids' => 10.60,
                'carbs' => 26.80,
                'fiber' => 1.30,
                'water' => 49.20
            ],
            [
                'name' => 'Tempeh',
                'calories_per_100g' => 192.0,
                'calories_per_oz' => 54.43,
                'proteins' => 20.29,
                'lipids' => 10.80,
                'carbs' => 7.64,
                'fiber' => 0.00,
                'water' => 59.65
            ],
            [
                'name' => 'Tofu (Firm)',
                'calories_per_100g' => 144.0,
                'calories_per_oz' => 40.82,
                'proteins' => 15.87,
                'lipids' => 8.72,
                'carbs' => 2.87,
                'fiber' => 2.30,
                'water' => 70.65
            ],
            [
                'name' => 'Tomato',
                'calories_per_100g' => 18.0,
                'calories_per_oz' => 5.10,
                'proteins' => 0.88,
                'lipids' => 0.20,
                'carbs' => 3.89,
                'fiber' => 1.20,
                'water' => 94.52
            ],
            [
                'name' => 'Tilapia (Cooked)',
                'calories_per_100g' => 129.0,
                'calories_per_oz' => 36.57,
                'proteins' => 26.15,
                'lipids' => 2.65,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 70.39
            ],
            [
                'name' => 'Tuna (Canned in Water)',
                'calories_per_100g' => 116.0,
                'calories_per_oz' => 32.89,
                'proteins' => 25.51,
                'lipids' => 1.01,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 72.64
            ],
            [
                'name' => 'Turkey Breast (Cooked)',
                'calories_per_100g' => 135.0,
                'calories_per_oz' => 38.27,
                'proteins' => 29.81,
                'lipids' => 1.24,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 67.70
            ],
            [
                'name' => 'Radish',
                'calories_per_100g' => 16.0,
                'calories_per_oz' => 4.54,
                'proteins' => 0.68,
                'lipids' => 0.10,
                'carbs' => 3.40,
                'fiber' => 1.60,
                'water' => 95.27
            ],
            [
                'name' => 'Raisins',
                'calories_per_100g' => 302.0,
                'calories_per_oz' => 85.61,
                'proteins' => 3.07,
                'lipids' => 0.46,
                'carbs' => 79.18,
                'fiber' => 3.70,
                'water' => 15.46
            ],
            [
                'name' => 'Raspberries',
                'calories_per_100g' => 52.0,
                'calories_per_oz' => 14.74,
                'proteins' => 1.20,
                'lipids' => 0.65,
                'carbs' => 11.94,
                'fiber' => 6.50,
                'water' => 85.75
            ],
            [
                'name' => 'Rice (Brown, Cooked)',
                'calories_per_100g' => 123.0,
                'calories_per_oz' => 34.87,
                'proteins' => 2.74,
                'lipids' => 0.97,
                'carbs' => 25.58,
                'fiber' => 1.60,
                'water' => 68.44
            ],
            [
                'name' => 'Rice (White, Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'proteins' => 2.69,
                'lipids' => 0.28,
                'carbs' => 28.17,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Ricotta Cheese',
                'calories_per_100g' => 174.0,
                'calories_per_oz' => 49.33,
                'proteins' => 11.26,
                'lipids' => 12.98,
                'carbs' => 3.04,
                'fiber' => 0.00,
                'water' => 71.70
            ],
            [
                'name' => 'Romaine Lettuce',
                'calories_per_100g' => 17.0,
                'calories_per_oz' => 4.82,
                'proteins' => 1.23,
                'lipids' => 0.30,
                'carbs' => 3.29,
                'fiber' => 2.10,
                'water' => 94.61
            ],
            [
                'name' => 'Rosemary (Fresh)',
                'calories_per_100g' => 131.0,
                'calories_per_oz' => 37.13,
                'proteins' => 3.31,
                'lipids' => 5.86,
                'carbs' => 20.70,
                'fiber' => 14.10,
                'water' => 67.77
            ],
            [
                'name' => 'Rutabaga',
                'calories_per_100g' => 37.0,
                'calories_per_oz' => 10.49,
                'proteins' => 1.08,
                'lipids' => 0.16,
                'carbs' => 8.62,
                'fiber' => 2.30,
                'water' => 89.13
            ],
            [
                'name' => 'Sausage (Italian)',
                'calories_per_100g' => 302.0,
                'calories_per_oz' => 85.61,
                'proteins' => 17.40,
                'lipids' => 25.10,
                'carbs' => 2.30,
                'fiber' => 0.00,
                'water' => 52.80
            ],
            [
                'name' => 'Scallops',
                'calories_per_100g' => 88.0,
                'calories_per_oz' => 24.94,
                'proteins' => 16.78,
                'lipids' => 0.84,
                'carbs' => 3.18,
                'fiber' => 0.00,
                'water' => 77.85
            ],
            [
                'name' => 'Shrimp (Cooked)',
                'calories_per_100g' => 99.0,
                'calories_per_oz' => 28.06,
                'proteins' => 20.91,
                'lipids' => 1.73,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 75.86
            ],
            [
                'name' => 'Spinach (Raw)',
                'calories_per_100g' => 23.0,
                'calories_per_oz' => 6.52,
                'proteins' => 2.86,
                'lipids' => 0.39,
                'carbs' => 3.63,
                'fiber' => 2.20,
                'water' => 91.40
            ],
            [
                'name' => 'Sweet Potato',
                'calories_per_100g' => 86.0,
                'calories_per_oz' => 24.38,
                'proteins' => 1.57,
                'lipids' => 0.05,
                'carbs' => 20.12,
                'fiber' => 3.00,
                'water' => 77.28
            ],
            [
                'name' => 'Swordfish',
                'calories_per_100g' => 172.0,
                'calories_per_oz' => 48.76,
                'proteins' => 20.86,
                'lipids' => 9.78,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 68.28
            ],
            [
                'name' => 'Soybeans (Cooked)',
                'calories_per_100g' => 172.0,
                'calories_per_oz' => 48.76,
                'proteins' => 18.21,
                'lipids' => 8.97,
                'carbs' => 8.36,
                'fiber' => 6.00,
                'water' => 62.55
            ],
            [
                'name' => 'Swiss Cheese',
                'calories_per_100g' => 380.0,
                'calories_per_oz' => 107.73,
                'proteins' => 26.93,
                'lipids' => 27.80,
                'carbs' => 5.38,
                'fiber' => 0.00,
                'water' => 37.10
            ],
            [
                'name' => 'Tahini',
                'calories_per_100g' => 595.0,
                'calories_per_oz' => 168.66,
                'proteins' => 17.00,
                'lipids' => 53.76,
                'carbs' => 21.19,
                'fiber' => 9.30,
                'water' => 3.00
            ],
            [
                'name' => 'Strawberries',
                'calories_per_100g' => 32.0,
                'calories_per_oz' => 9.07,
                'proteins' => 0.67,
                'lipids' => 0.30,
                'carbs' => 7.68,
                'fiber' => 2.00,
                'water' => 90.95
            ],
            [
                'name' => 'Sunflower Seeds',
                'calories_per_100g' => 584.0,
                'calories_per_oz' => 165.53,
                'proteins' => 20.78,
                'lipids' => 51.46,
                'carbs' => 20.00,
                'fiber' => 8.60,
                'water' => 4.73
            ],
            [
                'name' => 'Tamales',
                'calories_per_100g' => 215.0,
                'calories_per_oz' => 60.94,
                'proteins' => 5.54,
                'lipids' => 11.80,
                'carbs' => 23.44,
                'fiber' => 2.20,
                'water' => 57.20
            ],
            [
                'name' => 'Venison (Cooked)',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'proteins' => 30.21,
                'lipids' => 3.23,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 65.38
            ],
            [
                'name' => 'Tzatziki',
                'calories_per_100g' => 74.0,
                'calories_per_oz' => 20.98,
                'proteins' => 2.10,
                'lipids' => 5.90,
                'carbs' => 3.70,
                'fiber' => 0.30,
                'water' => 87.30
            ],
            [
                'name' => 'Udon Noodles (Cooked)',
                'calories_per_100g' => 147.0,
                'calories_per_oz' => 41.66,
                'proteins' => 4.50,
                'lipids' => 0.20,
                'carbs' => 31.20,
                'fiber' => 1.10,
                'water' => 62.80
            ],
            [
                'name' => 'Vermicelli (Cooked)',
                'calories_per_100g' => 157.0,
                'calories_per_oz' => 44.49,
                'proteins' => 5.40,
                'lipids' => 0.30,
                'carbs' => 31.70,
                'fiber' => 1.80,
                'water' => 60.20
            ],
            [
                'name' => 'Vegetable Broth',
                'calories_per_100g' => 12.0,
                'calories_per_oz' => 3.40,
                'proteins' => 0.40,
                'lipids' => 0.10,
                'carbs' => 2.40,
                'fiber' => 0.00,
                'water' => 96.80
            ],
            [
                'name' => 'Veal Cutlet',
                'calories_per_100g' => 213.0,
                'calories_per_oz' => 60.38,
                'proteins' => 31.90,
                'lipids' => 8.80,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 58.20
            ],
            [
                'name' => 'Vinegar (Balsamic)',
                'calories_per_100g' => 88.0,
                'calories_per_oz' => 24.95,
                'proteins' => 0.49,
                'lipids' => 0.00,
                'carbs' => 17.03,
                'fiber' => 0.00,
                'water' => 82.06
            ],
            [
                'name' => 'Vital Wheat Gluten',
                'calories_per_100g' => 370.0,
                'calories_per_oz' => 104.89,
                'proteins' => 75.16,
                'lipids' => 1.85,
                'carbs' => 13.79,
                'fiber' => 0.60,
                'water' => 6.90
            ],
            [
                'name' => 'Vodka',
                'calories_per_100g' => 231.0,
                'calories_per_oz' => 65.48,
                'proteins' => 0.00,
                'lipids' => 0.00,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 60.00
            ],
            [
                'name' => 'Wasabi',
                'calories_per_100g' => 109.0,
                'calories_per_oz' => 30.90,
                'proteins' => 4.80,
                'lipids' => 0.63,
                'carbs' => 23.50,
                'fiber' => 7.80,
                'water' => 69.10
            ],
            [
                'name' => 'Water Chestnuts',
                'calories_per_100g' => 97.0,
                'calories_per_oz' => 27.49,
                'proteins' => 1.40,
                'lipids' => 0.10,
                'carbs' => 23.90,
                'fiber' => 3.00,
                'water' => 73.50
            ],
            [
                'name' => 'Watercress',
                'calories_per_100g' => 11.0,
                'calories_per_oz' => 3.12,
                'proteins' => 2.30,
                'lipids' => 0.10,
                'carbs' => 1.29,
                'fiber' => 0.50,
                'water' => 95.11
            ],
            [
                'name' => 'Watermelon',
                'calories_per_100g' => 30.0,
                'calories_per_oz' => 8.50,
                'proteins' => 0.61,
                'lipids' => 0.15,
                'carbs' => 7.55,
                'fiber' => 0.40,
                'water' => 91.45
            ],
            [
                'name' => 'Wheat Bran',
                'calories_per_100g' => 216.0,
                'calories_per_oz' => 61.23,
                'proteins' => 15.55,
                'lipids' => 4.25,
                'carbs' => 64.51,
                'fiber' => 42.80,
                'water' => 9.89
            ],
            [
                'name' => 'Wheat Germ',
                'calories_per_100g' => 360.0,
                'calories_per_oz' => 102.06,
                'proteins' => 23.15,
                'lipids' => 9.72,
                'carbs' => 51.80,
                'fiber' => 13.20,
                'water' => 8.89
            ],
            [
                'name' => 'White Rice (Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'proteins' => 2.69,
                'lipids' => 0.28,
                'carbs' => 28.17,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Whiting Fish (Cooked)',
                'calories_per_100g' => 111.0,
                'calories_per_oz' => 31.47,
                'proteins' => 20.81,
                'lipids' => 2.29,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 75.35
            ],
            [
                'name' => 'Xacuti Curry',
                'calories_per_100g' => 123.0,
                'calories_per_oz' => 34.87,
                'proteins' => 4.50,
                'lipids' => 0.20,
                'carbs' => 31.20,
                'fiber' => 1.10,
                'water' => 62.80
            ],
            [
                'name' => 'Xigua (Watermelon)',
                'calories_per_100g' => 30.0,
                'calories_per_oz' => 8.50,
                'proteins' => 0.61,
                'lipids' => 0.15,
                'carbs' => 7.55,
                'fiber' => 0.40,
                'water' => 91.45
            ],
            [
                'name' => 'Ximenia (Wild Plum)',
                'calories_per_100g' => 70.0,
                'calories_per_oz' => 19.84,
                'proteins' => 1.20,
                'lipids' => 0.20,
                'carbs' => 17.50,
                'fiber' => 2.40,
                'water' => 80.50
            ],
            [
                'name' => 'Yam',
                'calories_per_100g' => 118.0,
                'calories_per_oz' => 33.45,
                'proteins' => 1.53,
                'lipids' => 0.17,
                'carbs' => 27.88,
                'fiber' => 4.10,
                'water' => 69.60
            ],
            [
                'name' => 'Yardlong Beans',
                'calories_per_100g' => 47.0,
                'calories_per_oz' => 13.32,
                'proteins' => 2.50,
                'lipids' => 0.20,
                'carbs' => 10.10,
                'fiber' => 2.80,
                'water' => 89.10
            ],
            [
                'name' => 'Yeast (Nutritional)',
                'calories_per_100g' => 344.0,
                'calories_per_oz' => 97.47,
                'proteins' => 50.00,
                'lipids' => 4.00,
                'carbs' => 37.00,
                'fiber' => 22.00,
                'water' => 5.00
            ],
            [
                'name' => 'Yellow Squash',
                'calories_per_100g' => 19.0,
                'calories_per_oz' => 5.39,
                'proteins' => 1.20,
                'lipids' => 0.20,
                'carbs' => 4.40,
                'fiber' => 1.20,
                'water' => 94.20
            ],
            [
                'name' => 'Yogurt (Greek, Plain)',
                'calories_per_100g' => 59.0,
                'calories_per_oz' => 16.72,
                'proteins' => 10.19,
                'lipids' => 0.39,
                'carbs' => 3.60,
                'fiber' => 0.00,
                'water' => 85.10
            ],
            [
                'name' => 'Yogurt (Regular, Plain)',
                'calories_per_100g' => 61.0,
                'calories_per_oz' => 17.28,
                'proteins' => 3.15,
                'lipids' => 3.25,
                'carbs' => 4.80,
                'fiber' => 0.00,
                'water' => 88.13
            ],
            [
                'name' => 'Yuzu',
                'calories_per_100g' => 22.0,
                'calories_per_oz' => 6.24,
                'proteins' => 1.80,
                'lipids' => 0.20,
                'carbs' => 5.30,
                'fiber' => 2.80,
                'water' => 92.10
            ],
            [
                'name' => 'Zinfandel Wine',
                'calories_per_100g' => 85.0,
                'calories_per_oz' => 24.10,
                'proteins' => 0.07,
                'lipids' => 0.00,
                'carbs' => 2.60,
                'fiber' => 0.00,
                'water' => 87.12
            ],
            [
                'name' => 'Ziti (Cooked)',
                'calories_per_100g' => 158.0,
                'calories_per_oz' => 44.77,
                'proteins' => 5.76,
                'lipids' => 0.93,
                'carbs' => 30.86,
                'fiber' => 1.80,
                'water' => 61.80
            ],
            [
                'name' => 'Zucchini',
                'calories_per_100g' => 17.0,
                'calories_per_oz' => 4.82,
                'proteins' => 1.20,
                'lipids' => 0.20,
                'carbs' => 3.50,
                'fiber' => 1.20,
                'water' => 95.20
            ],
            [
                'name' => 'Za\'atar Spice Mix',
                'calories_per_100g' => 254.0,
                'calories_per_oz' => 72.01,
                'proteins' => 7.60,
                'lipids' => 10.50,
                'carbs' => 40.20,
                'fiber' => 10.80,
                'water' => 6.90
            ],
            [
                'name' => 'Zebra Fish',
                'calories_per_100g' => 100.0,
                'calories_per_oz' => 28.35,
                'proteins' => 20.80,
                'lipids' => 1.20,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 76.90
            ],
            [
                'name' => 'Zero Calorie Sweetener',
                'calories_per_100g' => 0.0,
                'calories_per_oz' => 0.00,
                'proteins' => 0.00,
                'lipids' => 0.00,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 0.00
            ],
            [
                'name' => 'Zwieback Toast',
                'calories_per_100g' => 394.0,
                'calories_per_oz' => 111.69,
                'proteins' => 10.50,
                'lipids' => 4.30,
                'carbs' => 73.20,
                'fiber' => 2.40,
                'water' => 7.30
            ],
            [
                'name' => 'Ketchup',
                'calories_per_100g' => 101.0,
                'calories_per_oz' => 28.63,
                'proteins' => 1.74,
                'lipids' => 0.36,
                'carbs' => 23.59,
                'fiber' => 0.40,
                'water' => 72.90
            ],
            [
                'name' => 'Japanese Noodles (Udon)',
                'calories_per_100g' => 147.0,
                'calories_per_oz' => 41.66,
                'proteins' => 4.50,
                'lipids' => 0.20,
                'carbs' => 31.20,
                'fiber' => 1.70,
                'water' => 62.40
            ],
            [
                'name' => 'Jasmine Rice (Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'proteins' => 2.69,
                'lipids' => 0.28,
                'carbs' => 28.59,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Jerusalem Artichoke',
                'calories_per_100g' => 73.0,
                'calories_per_oz' => 20.69,
                'proteins' => 2.00,
                'lipids' => 0.10,
                'carbs' => 17.44,
                'fiber' => 1.60,
                'water' => 78.90
            ],
            [
                'name' => 'Jicama',
                'calories_per_100g' => 38.0,
                'calories_per_oz' => 10.77,
                'proteins' => 0.72,
                'lipids' => 0.09,
                'carbs' => 8.82,
                'fiber' => 4.90,
                'water' => 90.10
            ],
            [
                'name' => 'Juice (Grape)',
                'calories_per_100g' => 60.0,
                'calories_per_oz' => 17.01,
                'proteins' => 0.37,
                'lipids' => 0.13,
                'carbs' => 15.30,
                'fiber' => 0.10,
                'water' => 84.10
            ],
            [
                'name' => 'Juice (Orange)',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'proteins' => 0.70,
                'lipids' => 0.20,
                'carbs' => 10.40,
                'fiber' => 0.20,
                'water' => 88.30
            ],
            [
                'name' => 'Nopales',
                'calories_per_100g' => 16.0,
                'calories_per_oz' => 4.54,
                'proteins' => 1.32,
                'lipids' => 0.09,
                'carbs' => 3.33,
                'fiber' => 2.20,
                'water' => 94.00
            ],
            [
                'name' => 'Ketchup',
                'calories_per_100g' => 101.0,
                'calories_per_oz' => 28.63,
                'proteins' => 1.74,
                'lipids' => 0.36,
                'carbs' => 23.59,
                'fiber' => 0.40,
                'water' => 72.90
            ],
            [
                'name' => 'Japanese Noodles (Udon)',
                'calories_per_100g' => 147.0,
                'calories_per_oz' => 41.66,
                'proteins' => 4.50,
                'lipids' => 0.20,
                'carbs' => 31.20,
                'fiber' => 1.70,
                'water' => 62.40
            ],
            [
                'name' => 'Jasmine Rice (Cooked)',
                'calories_per_100g' => 130.0,
                'calories_per_oz' => 36.85,
                'proteins' => 2.69,
                'lipids' => 0.28,
                'carbs' => 28.59,
                'fiber' => 0.40,
                'water' => 68.44
            ],
            [
                'name' => 'Jerusalem Artichoke',
                'calories_per_100g' => 73.0,
                'calories_per_oz' => 20.69,
                'proteins' => 2.00,
                'lipids' => 0.10,
                'carbs' => 17.44,
                'fiber' => 1.60,
                'water' => 78.90
            ],
            [
                'name' => 'Jicama',
                'calories_per_100g' => 38.0,
                'calories_per_oz' => 10.77,
                'proteins' => 0.72,
                'lipids' => 0.09,
                'carbs' => 8.82,
                'fiber' => 4.90,
                'water' => 90.10
            ],
            [
                'name' => 'Juice (Grape)',
                'calories_per_100g' => 60.0,
                'calories_per_oz' => 17.01,
                'proteins' => 0.37,
                'lipids' => 0.13,
                'carbs' => 15.30,
                'fiber' => 0.10,
                'water' => 84.10
            ],
            [
                'name' => 'Juice (Orange)',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'proteins' => 0.70,
                'lipids' => 0.20,
                'carbs' => 10.40,
                'fiber' => 0.20,
                'water' => 88.30
            ],
            [
                'name' => 'Noodles (Egg)',
                'calories_per_100g' => 138.0,
                'calories_per_oz' => 39.12,
                'proteins' => 4.54,
                'lipids' => 2.07,
                'carbs' => 25.00,
                'fiber' => 1.20,
                'water' => 66.89
            ],
            [
                'name' => 'Nutella',
                'calories_per_100g' => 539.0,
                'calories_per_oz' => 152.81,
                'proteins' => 6.30,
                'lipids' => 30.90,
                'carbs' => 57.50,
                'fiber' => 3.40,
                'water' => 2.00
            ],
            [
                'name' => 'Nutritional Yeast',
                'calories_per_100g' => 344.0,
                'calories_per_oz' => 97.47,
                'proteins' => 50.00,
                'lipids' => 4.00,
                'carbs' => 37.00,
                'fiber' => 22.00,
                'water' => 5.00
            ],
            [
                'name' => 'Quince',
                'calories_per_100g' => 57.0,
                'calories_per_oz' => 16.16,
                'proteins' => 0.40,
                'lipids' => 0.10,
                'carbs' => 15.30,
                'fiber' => 1.90,
                'water' => 83.80
            ],
            [
                'name' => 'Vinegar (Balsamic)',
                'calories_per_100g' => 88.0,
                'calories_per_oz' => 24.95,
                'proteins' => 0.49,
                'lipids' => 0.00,
                'carbs' => 17.03,
                'fiber' => 0.00,
                'water' => 82.06
            ],
            [
                'name' => 'Wakame Seaweed (Raw)',
                'calories_per_100g' => 45.0,
                'calories_per_oz' => 12.76,
                'proteins' => 3.03,
                'lipids' => 0.64,
                'carbs' => 9.14,
                'fiber' => 0.50,
                'water' => 85.40
            ],
            [
                'name' => 'Walnuts',
                'calories_per_100g' => 654.0,
                'calories_per_oz' => 185.34,
                'proteins' => 15.23,
                'lipids' => 65.21,
                'carbs' => 13.71,
                'fiber' => 6.70,
                'water' => 4.07
            ],
            [
                'name' => 'White Wine',
                'calories_per_100g' => 82.0,
                'calories_per_oz' => 23.25,
                'proteins' => 0.07,
                'lipids' => 0.00,
                'carbs' => 2.60,
                'fiber' => 0.00,
                'water' => 87.12
            ],
            [
                'name' => 'Whitefish',
                'calories_per_100g' => 134.0,
                'calories_per_oz' => 37.99,
                'proteins' => 22.40,
                'lipids' => 4.50,
                'carbs' => 0.00,
                'fiber' => 0.00,
                'water' => 71.87
            ],
            [
                'name' => 'Whipped Cream',
                'calories_per_100g' => 257.0,
                'calories_per_oz' => 72.85,
                'proteins' => 2.17,
                'lipids' => 27.81,
                'carbs' => 2.70,
                'fiber' => 0.00,
                'water' => 66.10
            ],
            [
                'name' => 'Wild Rice',
                'calories_per_100g' => 357.0,
                'calories_per_oz' => 101.21,
                'proteins' => 14.73,
                'lipids' => 1.08,
                'carbs' => 74.90,
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
