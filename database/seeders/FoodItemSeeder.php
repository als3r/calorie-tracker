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
                'calories_per_gram' => 0.70,
                'calories_per_oz' => 19.84,
            ],
            [
                'name' => 'Almond Butter',
                'calories_per_gram' => 6.14,
                'calories_per_oz' => 174.0,
            ],
            [
                'name' => 'Almond Milk',
                'calories_per_gram' => 0.17,
                'calories_per_oz' => 4.82,
            ],
            [
                'name' => 'Almonds',
                'calories_per_gram' => 5.79,
                'calories_per_oz' => 164.12,
            ],
            [
                'name' => 'Anchovy',
                'calories_per_gram' => 2.08,
                'calories_per_oz' => 58.97,
            ],
            [
                'name' => 'Apple (Red)',
                'calories_per_gram' => 0.52,
                'calories_per_oz' => 14.74,
            ],
            [
                'name' => 'Apricot',
                'calories_per_gram' => 0.48,
                'calories_per_oz' => 13.60,
            ],
            [
                'name' => 'Artichoke',
                'calories_per_gram' => 0.47,
                'calories_per_oz' => 13.32,
            ],
            [
                'name' => 'Arugula',
                'calories_per_gram' => 0.25,
                'calories_per_oz' => 7.09,
            ],
            [
                'name' => 'Asparagus',
                'calories_per_gram' => 0.20,
                'calories_per_oz' => 5.67,
            ],
            [
                'name' => 'Avocado',
                'calories_per_gram' => 1.60,
                'calories_per_oz' => 45.36,
            ],
            [
                'name' => 'Bagel (Plain)',
                'calories_per_gram' => 2.57,
                'calories_per_oz' => 72.83,
            ],
            [
                'name' => 'Banana',
                'calories_per_gram' => 0.89,
                'calories_per_oz' => 25.22,
            ],
            [
                'name' => 'Beef (Ground, 80/20)',
                'calories_per_gram' => 2.54,
                'calories_per_oz' => 71.98,
            ],
            [
                'name' => 'Beets (Cooked)',
                'calories_per_gram' => 0.44,
                'calories_per_oz' => 12.47,
            ],
            [
                'name' => 'Black Beans (Cooked)',
                'calories_per_gram' => 1.32,
                'calories_per_oz' => 37.42,
            ],
            [
                'name' => 'Blackberries',
                'calories_per_gram' => 0.43,
                'calories_per_oz' => 12.18,
            ],
            [
                'name' => 'Blueberries',
                'calories_per_gram' => 0.57,
                'calories_per_oz' => 16.15,
            ],
            [
                'name' => 'Brazil Nuts',
                'calories_per_gram' => 6.56,
                'calories_per_oz' => 185.92,
            ],
            [
                'name' => 'Broccoli',
                'calories_per_gram' => 0.34,
                'calories_per_oz' => 9.63,
            ],
            [
                'name' => 'Brussels Sprouts',
                'calories_per_gram' => 0.43,
                'calories_per_oz' => 12.18,
            ],
            [
                'name' => 'Butter',
                'calories_per_gram' => 7.17,
                'calories_per_oz' => 203.22,
            ],
            [
                'name' => 'Butternut Squash',
                'calories_per_gram' => 0.45,
                'calories_per_oz' => 12.76,
            ],
            [
                'name' => 'Carrots (Raw)',
                'calories_per_gram' => 0.41,
                'calories_per_oz' => 11.62,
            ],
            [
                'name' => 'Cashews',
                'calories_per_gram' => 5.53,
                'calories_per_oz' => 156.76,
            ],
            [
                'name' => 'Cauliflower',
                'calories_per_gram' => 0.25,
                'calories_per_oz' => 7.09,
            ],
            [
                'name' => 'Chia Seeds',
                'calories_per_gram' => 4.86,
                'calories_per_oz' => 137.77,
            ],
            [
                'name' => 'Chicken Breast',
                'calories_per_gram' => 1.65,
                'calories_per_oz' => 46.75,
            ],
            [
                'name' => 'Coconut (Fresh)',
                'calories_per_gram' => 3.54,
                'calories_per_oz' => 100.31,
            ],
            [
                'name' => 'Corn (Sweet, Cooked)',
                'calories_per_gram' => 0.96,
                'calories_per_oz' => 27.22,
            ],
            [
                'name' => 'Cottage Cheese (2%)',
                'calories_per_gram' => 0.98,
                'calories_per_oz' => 27.77,
            ],
            [
                'name' => 'Cranberries (Raw)',
                'calories_per_gram' => 0.46,
                'calories_per_oz' => 13.04,
            ],
            [
                'name' => 'Cucumber',
                'calories_per_gram' => 0.15,
                'calories_per_oz' => 4.25,
            ],
            [
                'name' => 'Deli Turkey',
                'calories_per_gram' => 1.04,
                'calories_per_oz' => 29.47,
            ],
            [
                'name' => 'Dried Apricots',
                'calories_per_gram' => 2.41,
                'calories_per_oz' => 68.30,
            ],
            [
                'name' => 'Dried Cranberries',
                'calories_per_gram' => 3.08,
                'calories_per_oz' => 87.31,
            ],
            [
                'name' => 'Dried Mango',
                'calories_per_gram' => 3.19,
                'calories_per_oz' => 90.41,
            ],
            [
                'name' => 'Dried Seaweed',
                'calories_per_gram' => 3.49,
                'calories_per_oz' => 98.89,
            ],
            [
                'name' => 'Egg',
                'calories_per_gram' => 1.55,
                'calories_per_oz' => 43.94,
            ],
            [
                'name' => 'Egg Noodles',
                'calories_per_gram' => 3.84,
                'calories_per_oz' => 108.82,
            ],
            [
                'name' => 'Egg Whites',
                'calories_per_gram' => 0.52,
                'calories_per_oz' => 14.74,
            ],
            [
                'name' => 'Egg Yolk',
                'calories_per_gram' => 3.22,
                'calories_per_oz' => 91.26,
            ],
            [
                'name' => 'Eggplant',
                'calories_per_gram' => 0.25,
                'calories_per_oz' => 7.09,
            ],
            [
                'name' => 'Edamame',
                'calories_per_gram' => 1.22,
                'calories_per_oz' => 34.58,
            ],
            [
                'name' => 'Emmental Cheese',
                'calories_per_gram' => 3.79,
                'calories_per_oz' => 107.43,
            ],
            [
                'name' => 'English Muffin',
                'calories_per_gram' => 2.27,
                'calories_per_oz' => 64.34,
            ],
            [
                'name' => 'Feta Cheese',
                'calories_per_gram' => 2.64,
                'calories_per_oz' => 74.82,
            ],
            [
                'name' => 'Flax Seeds',
                'calories_per_gram' => 5.34,
                'calories_per_oz' => 151.37,
            ],
            [
                'name' => 'French Bread',
                'calories_per_gram' => 2.74,
                'calories_per_oz' => 77.65,
            ],
            [
                'name' => 'Fresh Salmon',
                'calories_per_gram' => 2.08,
                'calories_per_oz' => 58.97,
            ],
            [
                'name' => 'Garlic',
                'calories_per_gram' => 1.49,
                'calories_per_oz' => 42.23,
            ],
            [
                'name' => 'Ginger Root',
                'calories_per_gram' => 0.80,
                'calories_per_oz' => 22.68,
            ],
            [
                'name' => 'Granola',
                'calories_per_gram' => 4.12,
                'calories_per_oz' => 116.77,
            ],
            [
                'name' => 'Grapes',
                'calories_per_gram' => 0.69,
                'calories_per_oz' => 19.56,
            ],
            [
                'name' => 'Greek Yogurt',
                'calories_per_gram' => 0.59,
                'calories_per_oz' => 16.72,
            ],
            [
                'name' => 'Green Beans',
                'calories_per_gram' => 0.31,
                'calories_per_oz' => 8.79,
            ],
            [
                'name' => 'Ground Turkey',
                'calories_per_gram' => 1.90,
                'calories_per_oz' => 53.86,
            ],
            [
                'name' => 'Halibut',
                'calories_per_gram' => 1.11,
                'calories_per_oz' => 31.47,
            ],
            [
                'name' => 'Ham (Cooked)',
                'calories_per_gram' => 1.45,
                'calories_per_oz' => 41.09,
            ],
            [
                'name' => 'Honey',
                'calories_per_gram' => 3.04,
                'calories_per_oz' => 86.16,
            ],
            [
                'name' => 'Hummus',
                'calories_per_gram' => 1.77,
                'calories_per_oz' => 50.17,
            ],
            [
                'name' => 'Ice Cream (Vanilla)',
                'calories_per_gram' => 2.07,
                'calories_per_oz' => 58.67,
            ],
            [
                'name' => 'Iceberg Lettuce',
                'calories_per_gram' => 0.14,
                'calories_per_oz' => 3.97,
            ],
            [
                'name' => 'Instant Noodles',
                'calories_per_gram' => 4.37,
                'calories_per_oz' => 123.85,
            ],
            [
                'name' => 'Instant Rice',
                'calories_per_gram' => 3.57,
                'calories_per_oz' => 101.17,
            ],
            [
                'name' => 'Italian Bread',
                'calories_per_gram' => 2.70,
                'calories_per_oz' => 76.50,
            ],
            [
                'name' => 'Italian Dressing',
                'calories_per_gram' => 2.48,
                'calories_per_oz' => 70.28,
            ],
            [
                'name' => 'Italian Sausage',
                'calories_per_gram' => 3.02,
                'calories_per_oz' => 85.60,
            ],
            [
                'name' => 'Jackfruit',
                'calories_per_gram' => 0.95,
                'calories_per_oz' => 26.93,
            ],
            [
                'name' => 'Jalapeno Pepper',
                'calories_per_gram' => 0.28,
                'calories_per_oz' => 7.93,
            ],
            [
                'name' => 'Jam (Strawberry)',
                'calories_per_gram' => 2.78,
                'calories_per_oz' => 78.79,
            ],
            [
                'name' => 'Japanese Noodles (Udon)',
                'calories_per_gram' => 1.47,
                'calories_per_oz' => 41.66,
            ],
            [
                'name' => 'Jasmine Rice (Cooked)',
                'calories_per_gram' => 1.30,
                'calories_per_oz' => 36.85,
            ],
            [
                'name' => 'Jerusalem Artichoke',
                'calories_per_gram' => 0.73,
                'calories_per_oz' => 20.69,
            ],
            [
                'name' => 'Jicama',
                'calories_per_gram' => 0.38,
                'calories_per_oz' => 10.77,
            ],
            [
                'name' => 'Juice (Apple)',
                'calories_per_gram' => 0.47,
                'calories_per_oz' => 13.32,
            ],
            [
                'name' => 'Juice (Grape)',
                'calories_per_gram' => 0.60,
                'calories_per_oz' => 17.01,
            ],
            [
                'name' => 'Juice (Orange)',
                'calories_per_gram' => 0.45,
                'calories_per_oz' => 12.76,
            ],
            [
                'name' => 'Kale (Raw)',
                'calories_per_gram' => 0.49,
                'calories_per_oz' => 13.89,
            ],
            [
                'name' => 'Kamut (Cooked)',
                'calories_per_gram' => 1.46,
                'calories_per_oz' => 41.37,
            ],
            [
                'name' => 'Kelp (Raw)',
                'calories_per_gram' => 0.43,
                'calories_per_oz' => 12.18,
            ],
            [
                'name' => 'Kidney Beans (Cooked)',
                'calories_per_gram' => 1.27,
                'calories_per_oz' => 36.00,
            ],
            [
                'name' => 'Kiwi',
                'calories_per_gram' => 0.61,
                'calories_per_oz' => 17.28,
            ],
            [
                'name' => 'Kohlrabi',
                'calories_per_gram' => 0.27,
                'calories_per_oz' => 7.65,
            ],
            [
                'name' => 'Korean BBQ Beef',
                'calories_per_gram' => 2.42,
                'calories_per_oz' => 68.58,
            ],
            [
                'name' => 'Lamb Chop',
                'calories_per_gram' => 2.94,
                'calories_per_oz' => 83.33,
            ],
            [
                'name' => 'Leeks',
                'calories_per_gram' => 0.61,
                'calories_per_oz' => 17.28,
            ],
            [
                'name' => 'Lentils (Cooked)',
                'calories_per_gram' => 1.16,
                'calories_per_oz' => 32.89,
            ],
            [
                'name' => 'Lima Beans',
                'calories_per_gram' => 1.15,
                'calories_per_oz' => 32.60,
            ],
            [
                'name' => 'Linguine (Cooked)',
                'calories_per_gram' => 1.58,
                'calories_per_oz' => 44.77,
            ],
            [
                'name' => 'Liver (Beef)',
                'calories_per_gram' => 1.35,
                'calories_per_oz' => 38.27,
            ],
            [
                'name' => 'Lobster',
                'calories_per_gram' => 0.89,
                'calories_per_oz' => 25.23,
            ],
            [
                'name' => 'London Broil',
                'calories_per_gram' => 2.13,
                'calories_per_oz' => 60.38,
            ],
            [
                'name' => 'Lotus Root',
                'calories_per_gram' => 0.74,
                'calories_per_oz' => 20.98,
            ],
            [
                'name' => 'Lychee',
                'calories_per_gram' => 0.66,
                'calories_per_oz' => 18.71,
            ],
            [
                'name' => 'Macadamia Nuts',
                'calories_per_gram' => 7.18,
                'calories_per_oz' => 203.51,
            ],
            [
                'name' => 'Mango',
                'calories_per_gram' => 0.60,
                'calories_per_oz' => 17.01,
            ],
            [
                'name' => 'Maple Syrup',
                'calories_per_gram' => 2.60,
                'calories_per_oz' => 73.71,
            ],
            [
                'name' => 'Mozzarella Cheese',
                'calories_per_gram' => 2.80,
                'calories_per_oz' => 79.38,
            ],
            [
                'name' => 'Mushrooms',
                'calories_per_gram' => 0.22,
                'calories_per_oz' => 6.24,
            ],
            [
                'name' => 'Mussels',
                'calories_per_gram' => 0.86,
                'calories_per_oz' => 24.38,
            ],
            [
                'name' => 'Mustard Greens',
                'calories_per_gram' => 0.27,
                'calories_per_oz' => 7.65,
            ],
            [
                'name' => 'Multigrain Bread',
                'calories_per_gram' => 2.65,
                'calories_per_oz' => 75.11,
            ],
            [
                'name' => 'Mixed Nuts',
                'calories_per_gram' => 5.76,
                'calories_per_oz' => 163.21,
            ],
            [
                'name' => 'Milk (2%)',
                'calories_per_gram' => 0.50,
                'calories_per_oz' => 14.17,
            ],
            [
                'name' => 'Naan Bread',
                'calories_per_gram' => 3.10,
                'calories_per_oz' => 87.88,
            ],
            [
                'name' => 'Napa Cabbage',
                'calories_per_gram' => 0.13,
                'calories_per_oz' => 3.68,
            ],
            [
                'name' => 'Navy Beans (Cooked)',
                'calories_per_gram' => 1.40,
                'calories_per_oz' => 39.69,
            ],
            [
                'name' => 'Nectarine',
                'calories_per_gram' => 0.44,
                'calories_per_oz' => 12.47,
            ],
            [
                'name' => 'New York Strip Steak',
                'calories_per_gram' => 2.71,
                'calories_per_oz' => 76.82,
            ],
            [
                'name' => 'Noodles (Egg)',
                'calories_per_gram' => 1.38,
                'calories_per_oz' => 39.12,
            ],
            [
                'name' => 'Nutella',
                'calories_per_gram' => 5.39,
                'calories_per_oz' => 152.81,
            ],
            [
                'name' => 'Nutritional Yeast',
                'calories_per_gram' => 3.44,
                'calories_per_oz' => 97.47,
            ],
            [
                'name' => 'Nori (Dried Seaweed)',
                'calories_per_gram' => 0.35,
                'calories_per_oz' => 9.92,
            ],
            [
                'name' => 'Nuts (Brazil)',
                'calories_per_gram' => 6.56,
                'calories_per_oz' => 185.92,
            ],
            [
                'name' => 'Oat Milk',
                'calories_per_gram' => 0.45,
                'calories_per_oz' => 12.76,
            ],
            [
                'name' => 'Oatmeal (Cooked)',
                'calories_per_gram' => 0.71,
                'calories_per_oz' => 20.12,
            ],
            [
                'name' => 'Octopus (Cooked)',
                'calories_per_gram' => 1.64,
                'calories_per_oz' => 46.49,
            ],
            [
                'name' => 'Okra',
                'calories_per_gram' => 0.33,
                'calories_per_oz' => 9.35,
            ],
            [
                'name' => 'Olive Oil',
                'calories_per_gram' => 8.84,
                'calories_per_oz' => 250.59,
            ],
            [
                'name' => 'Olives (Green)',
                'calories_per_gram' => 1.45,
                'calories_per_oz' => 41.09,
            ],
            [
                'name' => 'Onion (Raw)',
                'calories_per_gram' => 0.40,
                'calories_per_oz' => 11.34,
            ],
            [
                'name' => 'Orange',
                'calories_per_gram' => 0.47,
                'calories_per_oz' => 13.32,
            ],
            [
                'name' => 'Oregano (Dried)',
                'calories_per_gram' => 2.65,
                'calories_per_oz' => 75.11,
            ],
            [
                'name' => 'Oysters',
                'calories_per_gram' => 0.68,
                'calories_per_oz' => 19.27,
            ],
            [
                'name' => 'Pancakes',
                'calories_per_gram' => 2.27,
                'calories_per_oz' => 64.35,
            ],
            [
                'name' => 'Papaya',
                'calories_per_gram' => 0.43,
                'calories_per_oz' => 12.19,
            ],
            [
                'name' => 'Parmesan Cheese',
                'calories_per_gram' => 4.31,
                'calories_per_oz' => 122.19,
            ],
            [
                'name' => 'Pasta (Penne)',
                'calories_per_gram' => 1.57,
                'calories_per_oz' => 44.49,
            ],
            [
                'name' => 'Peach',
                'calories_per_gram' => 0.39,
                'calories_per_oz' => 11.05,
            ],
            [
                'name' => 'Peanut Butter',
                'calories_per_gram' => 5.88,
                'calories_per_oz' => 166.69,
            ],
            [
                'name' => 'Pear',
                'calories_per_gram' => 0.57,
                'calories_per_oz' => 16.16,
            ],
            [
                'name' => 'Pineapple',
                'calories_per_gram' => 0.50,
                'calories_per_oz' => 14.17,
            ],
            [
                'name' => 'Pistachios',
                'calories_per_gram' => 5.62,
                'calories_per_oz' => 159.27,
            ],
            [
                'name' => 'Pomegranate Seeds',
                'calories_per_gram' => 0.83,
                'calories_per_oz' => 23.53,
            ],
            [
                'name' => 'Quail Eggs',
                'calories_per_gram' => 1.58,
                'calories_per_oz' => 44.77,
            ],
            [
                'name' => 'Quark Cheese',
                'calories_per_gram' => 0.68,
                'calories_per_oz' => 19.27,
            ],
            [
                'name' => 'Quinoa (Cooked)',
                'calories_per_gram' => 1.20,
                'calories_per_oz' => 34.02,
            ],
            [
                'name' => 'Quince',
                'calories_per_gram' => 0.57,
                'calories_per_oz' => 16.16,
            ],
            [
                'name' => 'Queso Fresco',
                'calories_per_gram' => 3.01,
                'calories_per_oz' => 85.33,
            ],
            [
                'name' => 'Queso Blanco',
                'calories_per_gram' => 3.10,
                'calories_per_oz' => 87.88,
            ],
            [
                'name' => 'Quesadilla (Cheese)',
                'calories_per_gram' => 2.42,
                'calories_per_oz' => 68.58,
            ],
            [
                'name' => 'Quorn (Meatless Pieces)',
                'calories_per_gram' => 1.05,
                'calories_per_oz' => 29.77,
            ],
            [
                'name' => 'Quick Oats (Dry)',
                'calories_per_gram' => 3.89,
                'calories_per_oz' => 110.26,
            ],
            [
                'name' => 'Rabbit (Cooked)',
                'calories_per_gram' => 1.73,
                'calories_per_oz' => 49.04,
            ],
            [
                'name' => 'Radish',
                'calories_per_gram' => 0.16,
                'calories_per_oz' => 4.54,
            ],
            [
                'name' => 'Raisins',
                'calories_per_gram' => 3.02,
                'calories_per_oz' => 85.61,
            ],
            [
                'name' => 'Raspberries',
                'calories_per_gram' => 0.52,
                'calories_per_oz' => 14.74,
            ],
            [
                'name' => 'Rice (Brown, Cooked)',
                'calories_per_gram' => 1.23,
                'calories_per_oz' => 34.87,
            ],
            [
                'name' => 'Ricotta Cheese',
                'calories_per_gram' => 1.74,
                'calories_per_oz' => 49.33,
            ],
            [
                'name' => 'Romaine Lettuce',
                'calories_per_gram' => 0.17,
                'calories_per_oz' => 4.82,
            ],
            [
                'name' => 'Rosemary (Fresh)',
                'calories_per_gram' => 1.31,
                'calories_per_oz' => 37.13,
            ],
            [
                'name' => 'Rutabaga',
                'calories_per_gram' => 0.37,
                'calories_per_oz' => 10.49,
            ],
            [
                'name' => 'Rye Bread',
                'calories_per_gram' => 2.59,
                'calories_per_oz' => 73.42,
            ],
            [
                'name' => 'Salmon',
                'calories_per_gram' => 2.08,
                'calories_per_oz' => 58.97,
            ],
            [
                'name' => 'Sausage (Italian)',
                'calories_per_gram' => 3.02,
                'calories_per_oz' => 85.61,
            ],
            [
                'name' => 'Shrimp (Cooked)',
                'calories_per_gram' => 0.99,
                'calories_per_oz' => 28.06,
            ],
            [
                'name' => 'Spinach (Raw)',
                'calories_per_gram' => 0.23,
                'calories_per_oz' => 6.52,
            ],
            [
                'name' => 'Sweet Potato',
                'calories_per_gram' => 0.86,
                'calories_per_oz' => 24.38,
            ],
            [
                'name' => 'Soybeans (Cooked)',
                'calories_per_gram' => 1.72,
                'calories_per_oz' => 48.76,
            ],
            [
                'name' => 'Strawberries',
                'calories_per_gram' => 0.32,
                'calories_per_oz' => 9.07,
            ],
            [
                'name' => 'Sunflower Seeds',
                'calories_per_gram' => 5.84,
                'calories_per_oz' => 165.53,
            ],
            [
                'name' => 'Swiss Cheese',
                'calories_per_gram' => 3.80,
                'calories_per_oz' => 107.73,
            ],
            [
                'name' => 'Swordfish (Cooked)',
                'calories_per_gram' => 1.72,
                'calories_per_oz' => 48.76,
            ],
            [
                'name' => 'Tahini',
                'calories_per_gram' => 5.95,
                'calories_per_oz' => 168.66,
            ],
            [
                'name' => 'Tamales',
                'calories_per_gram' => 2.15,
                'calories_per_oz' => 60.94,
            ],
            [
                'name' => 'Tangerine',
                'calories_per_gram' => 0.53,
                'calories_per_oz' => 15.02,
            ],
            [
                'name' => 'Tempeh',
                'calories_per_gram' => 1.92,
                'calories_per_oz' => 54.43,
            ],
            [
                'name' => 'Tilapia (Cooked)',
                'calories_per_gram' => 1.29,
                'calories_per_oz' => 36.57,
            ],
            [
                'name' => 'Tofu (Firm)',
                'calories_per_gram' => 0.76,
                'calories_per_oz' => 21.54,
            ],
            [
                'name' => 'Tomato',
                'calories_per_gram' => 0.18,
                'calories_per_oz' => 5.10,
            ],
            [
                'name' => 'Tuna (Canned in Water)',
                'calories_per_gram' => 1.16,
                'calories_per_oz' => 32.89,
            ],
            [
                'name' => 'Turkey Breast (Roasted)',
                'calories_per_gram' => 1.04,
                'calories_per_oz' => 29.48,
            ],
            [
                'name' => 'Tzatziki',
                'calories_per_gram' => 0.74,
                'calories_per_oz' => 20.98,
            ],
            [
                'name' => 'Udon Noodles (Cooked)',
                'calories_per_gram' => 1.47,
                'calories_per_oz' => 41.66,
            ],
            [
                'name' => 'Ugali (Cornmeal Porridge)',
                'calories_per_gram' => 1.12,
                'calories_per_oz' => 31.75,
            ],
            [
                'name' => 'Ugli Fruit',
                'calories_per_gram' => 0.36,
                'calories_per_oz' => 10.21,
            ],
            [
                'name' => 'Umeboshi (Pickled Plum)',
                'calories_per_gram' => 0.33,
                'calories_per_oz' => 9.35,
            ],
            [
                'name' => 'Unagi (Eel)',
                'calories_per_gram' => 2.36,
                'calories_per_oz' => 66.90,
            ],
            [
                'name' => 'Upma (Semolina)',
                'calories_per_gram' => 1.51,
                'calories_per_oz' => 42.81,
            ],
            [
                'name' => 'Urad Dal (Black Lentils)',
                'calories_per_gram' => 3.41,
                'calories_per_oz' => 96.66,
            ],
            [
                'name' => 'Urchin (Sea)',
                'calories_per_gram' => 1.25,
                'calories_per_oz' => 35.44,
            ],
            [
                'name' => 'Urfa Pepper (Dried)',
                'calories_per_gram' => 2.82,
                'calories_per_oz' => 79.94,
            ],
            [
                'name' => 'Uttapam (Rice Pancake)',
                'calories_per_gram' => 1.65,
                'calories_per_oz' => 46.77,
            ],
            [
                'name' => 'Vanilla Bean',
                'calories_per_gram' => 2.88,
                'calories_per_oz' => 81.64,
            ],
            [
                'name' => 'Veal Cutlet',
                'calories_per_gram' => 2.13,
                'calories_per_oz' => 60.38,
            ],
            [
                'name' => 'Vegetable Broth',
                'calories_per_gram' => 0.12,
                'calories_per_oz' => 3.40,
            ],
            [
                'name' => 'Venison (Cooked)',
                'calories_per_gram' => 1.58,
                'calories_per_oz' => 44.77,
            ],
            [
                'name' => 'Vermicelli (Cooked)',
                'calories_per_gram' => 1.57,
                'calories_per_oz' => 44.49,
            ],
            [
                'name' => 'Vinegar (Balsamic)',
                'calories_per_gram' => 0.88,
                'calories_per_oz' => 24.95,
            ],
            [
                'name' => 'Vital Wheat Gluten',
                'calories_per_gram' => 3.70,
                'calories_per_oz' => 104.89,
            ],
            [
                'name' => 'Vodka',
                'calories_per_gram' => 2.31,
                'calories_per_oz' => 65.48,
            ],
            [
                'name' => 'Vegetable Oil',
                'calories_per_gram' => 8.84,
                'calories_per_oz' => 250.59,
            ],
            [
                'name' => 'Vanilla Ice Cream',
                'calories_per_gram' => 2.07,
                'calories_per_oz' => 58.68,
            ],
            [
                'name' => 'Waffles',
                'calories_per_gram' => 2.91,
                'calories_per_oz' => 82.49,
            ],
            [
                'name' => 'Walnut',
                'calories_per_gram' => 6.54,
                'calories_per_oz' => 185.35,
            ],
            [
                'name' => 'Wasabi',
                'calories_per_gram' => 1.09,
                'calories_per_oz' => 30.90,
            ],
            [
                'name' => 'Water Chestnuts',
                'calories_per_gram' => 0.97,
                'calories_per_oz' => 27.49,
            ],
            [
                'name' => 'Watercress',
                'calories_per_gram' => 0.11,
                'calories_per_oz' => 3.12,
            ],
            [
                'name' => 'Watermelon',
                'calories_per_gram' => 0.30,
                'calories_per_oz' => 8.50,
            ],
            [
                'name' => 'Wheat Bran',
                'calories_per_gram' => 2.16,
                'calories_per_oz' => 61.23,
            ],
            [
                'name' => 'Wheat Germ',
                'calories_per_gram' => 3.60,
                'calories_per_oz' => 102.06,
            ],
            [
                'name' => 'White Rice (Cooked)',
                'calories_per_gram' => 1.30,
                'calories_per_oz' => 36.85,
            ],
            [
                'name' => 'Whiting Fish (Cooked)',
                'calories_per_gram' => 1.16,
                'calories_per_oz' => 32.89,
            ],
            [
                'name' => 'Xacuti Curry',
                'calories_per_gram' => 1.23,
                'calories_per_oz' => 34.87,
            ],
            [
                'name' => 'Xigua (Watermelon)',
                'calories_per_gram' => 0.30,
                'calories_per_oz' => 8.50,
            ],
            [
                'name' => 'Ximenia (Wild Plum)',
                'calories_per_gram' => 0.70,
                'calories_per_oz' => 19.84,
            ],
            [
                'name' => 'Yam',
                'calories_per_gram' => 1.18,
                'calories_per_oz' => 33.45,
            ],
            [
                'name' => 'Yardlong Beans',
                'calories_per_gram' => 0.47,
                'calories_per_oz' => 13.32,
            ],
            [
                'name' => 'Yeast (Nutritional)',
                'calories_per_gram' => 3.25,
                'calories_per_oz' => 92.14,
            ],
            [
                'name' => 'Yellow Squash',
                'calories_per_gram' => 0.19,
                'calories_per_oz' => 5.39,
            ],
            [
                'name' => 'Yogurt (Greek, Plain)',
                'calories_per_gram' => 0.97,
                'calories_per_oz' => 27.49,
            ],
            [
                'name' => 'Yogurt (Regular, Plain)',
                'calories_per_gram' => 0.61,
                'calories_per_oz' => 17.28,
            ],
            [
                'name' => 'Yuzu',
                'calories_per_gram' => 0.22,
                'calories_per_oz' => 6.24,
            ],
            [
                'name' => 'Zinfandel Wine',
                'calories_per_gram' => 0.85,
                'calories_per_oz' => 24.10,
            ],
            [
                'name' => 'Ziti (Cooked)',
                'calories_per_gram' => 1.58,
                'calories_per_oz' => 44.77,
            ],
            [
                'name' => 'Zucchini',
                'calories_per_gram' => 0.17,
                'calories_per_oz' => 4.82,
            ],
            [
                'name' => 'Za\'atar Spice Mix',
                'calories_per_gram' => 2.54,
                'calories_per_oz' => 72.01,
            ],
            [
                'name' => 'Zebra Fish',
                'calories_per_gram' => 1.00,
                'calories_per_oz' => 28.35,
            ],
            [
                'name' => 'Zero Calorie Sweetener',
                'calories_per_gram' => 0.00,
                'calories_per_oz' => 0.00,
            ],
            [
                'name' => 'Zwieback Toast',
                'calories_per_gram' => 3.94,
                'calories_per_oz' => 111.69,
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
