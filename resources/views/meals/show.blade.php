<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $meal->name }}
            </h2>
            <div class="flex space-x-4">
                <a href="{{ route('meals.edit', $meal) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit Meal
                </a>
                <a href="{{ route('meals.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back to List
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Meal Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h3 class="text-lg font-medium mb-4">Meal Information</h3>
                            <dl class="grid grid-cols-1 gap-4">
                                <div>
                                    <dt class="font-medium text-gray-500 dark:text-gray-400">Meal Type</dt>
                                    <dd>{{ $meal->mealType->name }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-500 dark:text-gray-400">Date & Time</dt>
                                    <dd>{{ $meal->date->format('F j, Y') }} at {{ $meal->time->format('g:i A') }}</dd>
                                </div>
                                @if($meal->description)
                                <div>
                                    <dt class="font-medium text-gray-500 dark:text-gray-400">Description</dt>
                                    <dd>{{ $meal->description }}</dd>
                                </div>
                                @endif
                            </dl>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium mb-4">Nutritional Summary</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg">
                                    <div class="text-sm text-blue-600 dark:text-blue-300">Calories</div>
                                    <div class="text-2xl font-bold">{{ number_format($meal->total_calories, 1) }}</div>
                                </div>
                                <div class="bg-green-100 dark:bg-green-900 p-4 rounded-lg">
                                    <div class="text-sm text-green-600 dark:text-green-300">Protein</div>
                                    <div class="text-2xl font-bold">{{ number_format($meal->total_protein, 1) }}g</div>
                                </div>
                                <div class="bg-yellow-100 dark:bg-yellow-900 p-4 rounded-lg">
                                    <div class="text-sm text-yellow-600 dark:text-yellow-300">Fat</div>
                                    <div class="text-2xl font-bold">{{ number_format($meal->total_fat, 1) }}g</div>
                                </div>
                                <div class="bg-purple-100 dark:bg-purple-900 p-4 rounded-lg">
                                    <div class="text-sm text-purple-600 dark:text-purple-300">Carbs</div>
                                    <div class="text-2xl font-bold">{{ number_format($meal->total_carb, 1) }}g</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Food Items -->
                    <div>
                        <h3 class="text-lg font-medium mb-4">Food Items</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Food Item</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Quantity</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Calories</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Protein</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Fat</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Carbs</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                    @foreach($meal->foodItems as $foodItem)
                                        @php
                                            $quantity = $foodItem->pivot->quantity;
                                            $unit = $foodItem->pivot->unit;
                                            
                                            // Convert to grams for calculations
                                            if ($unit === 'oz') {
                                                $quantity *= 28.3495;
                                            } elseif ($unit === 'serving') {
                                                $quantity = 100;
                                            }
                                            
                                            $multiplier = $quantity / 100;
                                        @endphp
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $foodItem->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $foodItem->pivot->quantity }} {{ $foodItem->pivot->unit }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ number_format($foodItem->calories_per_100g * $multiplier, 1) }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ number_format($foodItem->protein * $multiplier, 1) }}g
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ number_format($foodItem->total_fat * $multiplier, 1) }}g
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ number_format($foodItem->total_carb * $multiplier, 1) }}g
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
