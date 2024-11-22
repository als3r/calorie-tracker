<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($meal) ? __('Edit Meal') : __('Create New Meal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ isset($meal) ? route('meals.update', $meal) : route('meals.store') }}" class="space-y-6">
                        @csrf
                        @if(isset($meal))
                            @method('PUT')
                        @endif

                        <!-- Basic Meal Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="meal_type_id" :value="__('Meal Type')" />
                                <select id="meal_type_id" name="meal_type_id" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    <option value="">Select a meal type</option>
                                    @foreach ($mealTypes as $type)
                                        <option value="{{ $type->id }}" {{ (old('meal_type_id', $meal->meal_type_id ?? '') == $type->id) ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('meal_type_id')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="date" :value="__('Date')" />
                                <x-text-input id="date" name="date" type="date" class="mt-1 block w-full" :value="old('date', isset($meal) ? $meal->date->format('Y-m-d') : date('Y-m-d'))" required />
                                <x-input-error :messages="$errors->get('date')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="time" :value="__('Time')" />
                                <x-text-input id="time" name="time" type="time" class="mt-1 block w-full" :value="old('time', isset($meal) ? $meal->time->format('H:i') : date('H:i'))" required />
                                <x-input-error :messages="$errors->get('time')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Food Items Section -->
                        <div class="mt-6">
                            <h3 class="text-lg font-medium">Food Items</h3>
                            <div id="food-items-container" class="space-y-4 mt-4">
                                @if(isset($meal))
                                    @foreach($meal->foodItems as $index => $foodItem)
                                        <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative">
                                            <div>
                                                <x-input-label :for="'food_items['.$index.'][id]'" :value="__('Food Item')" />
                                                <select name="food_items[{{ $index }}][id]" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                                    <option value="">Select a food item</option>
                                                    @foreach ($foodItems as $item)
                                                        <option value="{{ $item->id }}" {{ old('food_items.'.$index.'.id', $foodItem->id) == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <x-input-label :for="'food_items['.$index.'][quantity]'" :value="__('Quantity, g or ml')" />
                                                <x-text-input :id="'food_items['.$index.'][quantity]'" name="food_items[{{ $index }}][quantity]" type="number" step="0.01" class="mt-1 block w-full" :value="old('food_items.'.$index.'.quantity', $foodItem->pivot->quantity)" required />
                                            </div>
                                            <button type="button" class="remove-food-item absolute top-2 right-2 text-red-500 hover:text-red-700">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative">
                                        <div>
                                            <x-input-label for="food_items[0][id]" :value="__('Food Item')" />
                                            <select name="food_items[0][id]" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                                <option value="">Select a food item</option>
                                                @foreach ($foodItems as $item)
                                                    <option value="{{ $item->id }}" {{ old('food_items.0.id') == $item->id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <x-input-label for="food_items[0][quantity]" :value="__('Quantity')" />
                                            <x-text-input id="food_items[0][quantity]" name="food_items[0][quantity]" type="number" step="0.01" class="mt-1 block w-full" :value="old('food_items.0.quantity')" required />
                                        </div>
                                        <button type="button" class="remove-food-item absolute top-2 right-2 text-red-500 hover:text-red-700">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <div class="mt-4">
                                <button type="button" id="add-food-item" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Add Food Item
                                </button>
                            </div>
                        </div>

                        <!-- Additional Meal Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <x-input-label for="description" :value="__('Description')" />
                                    <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" rows="3">{{ old('description', $meal->description ?? '') }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <div>
                                    <x-input-label for="name" :value="__('Meal Name')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $meal->name ?? '')" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ isset($meal) ? __('Update Meal') : __('Save Meal') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('food-items-container');
            const addButton = document.getElementById('add-food-item');
            let itemCount = document.querySelectorAll('.food-item').length;

            addButton.addEventListener('click', function() {
                const newItem = document.querySelector('.food-item').cloneNode(true);
                const inputs = newItem.querySelectorAll('input, select');
                
                // Update IDs and names
                inputs.forEach(input => {
                    const oldName = input.getAttribute('name');
                    if (oldName) {
                        const newName = oldName.replace(/\[\d+\]/, `[${itemCount}]`);
                        input.setAttribute('name', newName);
                        input.setAttribute('id', newName);
                    }
                    input.value = '';
                });

                container.appendChild(newItem);
                itemCount++;
            });

            // Remove food item - Updated event delegation
            document.addEventListener('click', function(e) {
                const removeButton = e.target.closest('.remove-food-item');
                if (removeButton) {
                    const foodItem = removeButton.closest('.food-item');
                    const foodItems = container.querySelectorAll('.food-item');
                    if (foodItems.length > 1) {
                        foodItem.remove();
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
