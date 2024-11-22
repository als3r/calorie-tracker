<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Meals') }}
            </h2>
            <a href="{{ route('meals.create') }}" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                Add New Meal
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Filters -->
                    <form method="GET" action="{{ route('meals.index') }}" class="mb-6 space-y-4">
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <x-input-label for="date" :value="__('Date')" />
                                <x-text-input id="date" name="date" type="date" class="mt-1 block w-full" :value="request('date')" />
                            </div>
                            <div class="flex-1">
                                <x-input-label for="meal_type" :value="__('Meal Type')" />
                                <select id="meal_type" name="meal_type" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="">All Meal Types</option>
                                    @foreach ($mealTypes as $type)
                                        <option value="{{ $type->id }}" {{ request('meal_type') == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-end">
                                <x-primary-button type="submit">
                                    {{ __('Filter') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>

                    <!-- Meals Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="px-6 py-3 text-left">Date</th>
                                    <th class="px-6 py-3 text-left">Time</th>
                                    <th class="px-6 py-3 text-left">Meal</th>
                                    <th class="px-6 py-3 text-left">Calories</th>
                                    <th class="px-6 py-3 text-left">Protein</th>
                                    <th class="px-6 py-3 text-left">Fat</th>
                                    <th class="px-6 py-3 text-left">Carbs</th>
                                    <th class="px-6 py-3 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                @foreach ($meals as $meal)
                                    <tr>
                                        <td class="px-6 py-4">{{ $meal->date->format('Y-m-d') }}</td>
                                        <td class="px-6 py-4">{{ $meal->time->format('H:i') }}</td>
                                        <td class="px-6 py-4">{{ $meal->mealType->name }}</td>
                                        <td class="px-6 py-4">{{ number_format($meal->total_calories, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($meal->total_protein, 1) }}g</td>
                                        <td class="px-6 py-4">{{ number_format($meal->total_fat, 1) }}g</td>
                                        <td class="px-6 py-4">{{ number_format($meal->total_carb, 1) }}g</td>
                                        <td class="px-6 py-4">
                                            <div class="flex space-x-6">
                                                <a href="{{ route('meals.show', $meal) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400">View</a> 
                                                <a href="{{ route('meals.edit', $meal) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400">Edit</a>
                                                <form action="{{ route('meals.destroy', $meal) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400" onclick="return confirm('Are you sure you want to delete this meal?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $meals->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
