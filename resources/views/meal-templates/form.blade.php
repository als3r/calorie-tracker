<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($mealTemplate) ? __('Edit Template') : __('Create Template') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ isset($mealTemplate) ? route('meal-templates.update', $mealTemplate) : route('meal-templates.store') }}">
                        @csrf
                        @if(isset($mealTemplate))
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Template Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $mealTemplate->name ?? '')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Meal Type -->
                            <div>
                                <x-input-label for="meal_type_id" :value="__('Meal Type')" />
                                <select id="meal_type_id" name="meal_type_id" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="">{{ __('Select a meal type') }}</option>
                                    @foreach($mealTypes as $type)
                                        <option value="{{ $type->id }}" {{ (old('meal_type_id', $mealTemplate->meal_type_id ?? '') == $type->id) ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('meal_type_id')" class="mt-2" />
                            </div>

                            <!-- Time -->
                            <div>
                                <x-input-label for="time" :value="__('Time')" />
                                <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" :value="old('time', optional($mealTemplate->time ?? null)?->format('H:i'))" required />
                                <x-input-error :messages="$errors->get('time')" class="mt-2" />
                            </div>

                            <!-- Description -->
                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('description', $mealTemplate->description ?? '') }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Food Items -->
                        <div class="mb-6">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-medium">{{ __('Food Items') }}</h3>
                                <button type="button" id="add-food-item" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    {{ __('Add Food Item') }}
                                </button>
                            </div>

                            <div id="food-items-container">
                                @if(isset($mealTemplate))
                                    @foreach($mealTemplate->foodItems as $index => $item)
                                        <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative mb-4">
                                            <div>
                                                <x-input-label for="food_items[{{ $index }}][id]" :value="__('Food Item')" />
                                                <select name="food_items[{{ $index }}][id]" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                                    <option value="">Select a food item</option>
                                                    @foreach($foodItems as $foodItem)
                                                        <option value="{{ $foodItem->id }}" {{ $item->id == $foodItem->id ? 'selected' : '' }}>
                                                            {{ $foodItem->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <x-input-label for="food_items[{{ $index }}][quantity]" :value="__('Quantity, g or ml')" />
                                                <x-text-input type="number" step="0.01" name="food_items[{{ $index }}][quantity]" :value="$item->pivot->quantity" required class="mt-1 block w-full" />
                                            </div>
                                            <button type="button" class="remove-food-item absolute top-2 right-2 text-red-500 hover:text-red-700">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative mb-4">
                                        <div>
                                            <x-input-label for="food_items[0][id]" :value="__('Food Item')" />
                                            <select name="food_items[0][id]" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                                <option value="">Select a food item</option>
                                                @foreach($foodItems as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <x-input-label for="food_items[0][quantity]" :value="__('Quantity, g or ml')" />
                                            <x-text-input type="number" step="0.01" name="food_items[0][quantity]" required class="mt-1 block w-full" />
                                        </div>
                                        <button type="button" class="remove-food-item absolute top-2 right-2 text-red-500 hover:text-red-700">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('meal-templates.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mr-4">
                                {{ __('Cancel') }}
                            </a>
                            <x-primary-button>
                                {{ isset($mealTemplate) ? __('Update Template') : __('Create Template') }}
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
                // Clone the template
                const template = `
                    <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative mb-4">
                        <div>
                            <x-input-label for="food_items[${itemCount}][id]" :value="__('Food Item')" />
                            <select name="food_items[${itemCount}][id]" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="">Select a food item</option>
                                @foreach($foodItems as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-input-label for="food_items[${itemCount}][quantity]" :value="__('Quantity, g or ml')" />
                            <input type="number" step="0.01" name="food_items[${itemCount}][quantity]" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                        </div>
                        <button type="button" class="remove-food-item absolute top-2 right-2 text-red-500 hover:text-red-700">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                `;

                // Create a temporary container and set its HTML
                const temp = document.createElement('div');
                temp.innerHTML = template;

                // Get the new item
                const newItem = temp.firstElementChild;

                // Add the new item to the container
                container.appendChild(newItem);
                itemCount++;
            });

            // Remove food item using event delegation
            container.addEventListener('click', function(e) {
                if (e.target.closest('.remove-food-item')) {
                    const foodItem = e.target.closest('.food-item');
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
