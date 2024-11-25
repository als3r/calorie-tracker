<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome back, :name!", ["name" => auth()->user()->name ?? "Guest"]) }}
                </div>
            </div>


            <!-- Today's Meals -->
            <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">{{ __("Today's Meals") }}</h3>
                        <a href="{{ route('meals.create') }}" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                            {{ __('Add Meal') }}
                        </a>
                    </div>

                    @if($todaysMeals->count() > 0)
                        <!-- Nutritional Summary -->
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mb-8">
                            <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">{{ __("Today's Nutritional Summary") }}</h4>
                            <div class="flex justify-around items-center">
                                <div class="text-center px-6">
                                    <div class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-2">
                                        {{ number_format($todaysMeals->sum('total_calories'), 1) }}
                                    </div>
                                    <div class="text-base font-medium text-gray-600 dark:text-gray-400">{{ __('Calories') }}</div>
                                </div>
                                <div class="text-center px-6">
                                    <div class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-2">
                                        {{ number_format($todaysMeals->sum('total_protein'), 1) }}g
                                    </div>
                                    <div class="text-base font-medium text-gray-600 dark:text-gray-400">{{ __('Protein') }}</div>
                                </div>
                                <div class="text-center px-6">
                                    <div class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-2">
                                        {{ number_format($todaysMeals->sum('total_fat'), 1) }}g
                                    </div>
                                    <div class="text-base font-medium text-gray-600 dark:text-gray-400">{{ __('Fat') }}</div>
                                </div>
                                <div class="text-center px-6">
                                    <div class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-2">
                                        {{ number_format($todaysMeals->sum('total_carb'), 1) }}g
                                    </div>
                                    <div class="text-base font-medium text-gray-600 dark:text-gray-400">{{ __('Carbs') }}</div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($todaysMeals->count() > 0)
                        <div class="overflow-x-auto w-full">
                            <table class="w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-700">
                                        <th class="px-6 py-3 text-left">{{ __('Meal') }}</th>
                                        <th class="px-6 py-3 text-left">{{ __('Time') }}</th>
                                        <th class="px-6 py-3 text-right">{{ __('Calories') }}</th>
                                        <th class="px-6 py-3 text-right">{{ __('Protein') }}</th>
                                        <th class="px-6 py-3 text-right">{{ __('Fat') }}</th>
                                        <th class="px-6 py-3 text-right">{{ __('Carbs') }}</th>
                                        <th class="px-6 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                    @foreach($todaysMeals as $meal)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-750">
                                            <td class="px-6 py-4">{{ $meal->mealType->name }}</td>
                                            <td class="px-6 py-4">{{ $meal->time->format('H:i') }}</td>
                                            <td class="px-6 py-4 text-right">{{ number_format($meal->total_calories, 1) }}</td>
                                            <td class="px-6 py-4 text-right">{{ number_format($meal->total_protein, 1) }}g</td>
                                            <td class="px-6 py-4 text-right">{{ number_format($meal->total_fat, 1) }}g</td>
                                            <td class="px-6 py-4 text-right">{{ number_format($meal->total_carb, 1) }}g</td>
                                            <td class="px-6 py-4 text-right">
                                                <a href="{{ route('meals.edit', $meal) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">{{ __('Edit') }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500 dark:text-gray-400">{{ __('No meals recorded for today.') }}</p>
                    @endif
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
