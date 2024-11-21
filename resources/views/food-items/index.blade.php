<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Food Items') }}
            </h2>
            <a href="{{ route('food-items.create') }}" class="btn btn-primary py-2 px-4 rounded">
                Add New Food Item
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="px-6 py-3 text-left">Name</th>
                                    <th class="px-6 py-3 text-left">Calories (kCal, per 100g)</th>
                                    <th class="px-6 py-3 text-left">Total Fat (g, per 100g)</th>
                                    <th class="px-6 py-3 text-left">Total Carbs (g, per 100g)</th>
                                    <th class="px-6 py-3 text-left">Fiber (g, per 100g)</th>
                                    <th class="px-6 py-3 text-left">Protein (g, per 100g)</th>
                                    <th class="px-6 py-3 text-left">Water (%)</th>
                                    <th class="px-6 py-3 text-left">Calories (kCal, per oz)</th>
                                    <th class="px-6 py-3 text-left">Calories (kCal, per 4 oz)</th>
                                    <th class="px-6 py-3 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                @foreach ($foodItems as $item)
                                    <tr>
                                        <td class="px-6 py-4">{{ $item->name }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->calories_per_100g, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->total_fat, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->total_carb, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->fiber, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->protein, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->water, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->calories_per_oz, 1) }}</td>
                                        <td class="px-6 py-4">{{ number_format($item->calories_per_oz * 4, 1) }}</td>
                                        <td class="px-6 py-4">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('food-items.edit', $item) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400">Edit</a>
                                                <form action="{{ route('food-items.destroy', $item) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400" onclick="return confirm('Are you sure you want to delete this item?')">
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
                    
                    <div class="mt-4">
                        {{ $foodItems->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
