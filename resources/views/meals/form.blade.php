<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($meal->id) ? __('Edit Meal') : __('Create New Meal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ isset($meal->id) ? route('meals.update', $meal) : route('meals.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @if(isset($meal->id))
                            @method('PUT')
                        @endif
                        
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

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
                                <x-text-input id="date" name="date" type="date" class="mt-1 block w-full" :value="old('date', $meal->date?->format('Y-m-d') ?? date('Y-m-d'))" required />
                                <x-input-error :messages="$errors->get('date')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="time" :value="__('Time')" />
                                <x-text-input id="time" name="time" type="time" class="mt-1 block w-full" :value="old('time', $meal->time?->format('H:i') ?? date('H:i'))" required />
                                <x-input-error :messages="$errors->get('time')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Food Items Section -->
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium">{{ __('Food Items') }}</h3>
                                <div class="space-x-2">
                                    <button type="button" id="use-template-btn" onclick="openUseTemplateModal()" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        {{ __('Use Template') }}
                                    </button>
                                    <button type="button" id="add-food-item" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        {{ __('Add Food Item') }}
                                    </button>
                                </div>
                            </div>
                            <div id="food-items-container" class="space-y-6 mt-4">
                                @if(isset($meal->id) && $meal->foodItems->isNotEmpty())
                                    @foreach($meal->foodItems as $index => $foodItem)
                                        <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative">
                                            <div>
                                                <x-input-label :for="'food_items['.$index.'][food_item_id]'" :value="__('Food Item')" />
                                                <select name="food_items[{{ $index }}][food_item_id]" class="food-item-select mt-1 block w-full rounded-md shadow-sm" data-validation="required" data-selected-value="{{ $foodItem->id }}">
                                                </select>
                                                <x-input-error :messages="$errors->get('food_items.'.$index.'.food_item_id')" class="mt-2" />
                                            </div>
                                            <div>
                                                <x-input-label :for="'food_items['.$index.'][quantity]'" :value="__('Quantity, g or ml')" />
                                                <x-text-input type="number" step="0.01" name="food_items[{{ $index }}][quantity]" :value="old('food_items.'.$index.'.quantity', $foodItem->pivot->quantity)" class="mt-1 block w-full" required />
                                                <x-input-error :messages="$errors->get('food_items.'.$index.'.quantity')" class="mt-2" />
                                            </div>
                                            <div class="md:col-span-2 flex justify-end">
                                                <button type="button" onclick="this.closest('.food-item').remove()" class="text-red-600 hover:text-red-900">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative">
                                        <div>
                                            <x-input-label for="food_items[0][food_item_id]" :value="__('Food Item')" />
                                            <select name="food_items[0][food_item_id]" class="food-item-select mt-1 block w-full  rounded-md shadow-sm" data-validation="required">
                                            </select>
                                            <x-input-error :messages="$errors->get('food_items.0.food_item_id')" class="mt-2" />
                                        </div>
                                        <div>
                                            <x-input-label for="food_items[0][quantity]" :value="__('Quantity, g or ml')" />
                                            <x-text-input type="number" step="0.01" name="food_items[0][quantity]" class="mt-1 block w-full" required />
                                            <x-input-error :messages="$errors->get('food_items.0.quantity')" class="mt-2" />
                                        </div>
                                        <div class="md:col-span-2 flex justify-end">
                                            <button type="button" onclick="this.closest('.food-item').remove()" class="text-red-600 hover:text-red-900">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <template id="food-item-template">
                                <div class="food-item grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border rounded-lg relative">
                                    <div>
                                        <x-input-label :for="'food_items[${index}][food_item_id]'" :value="__('Food Item')" />
                                        <select name="food_items[${index}][food_item_id]" class="food-item-select mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" data-validation="required">
                                            <option value="">Select a food item</option>
                                        </select>
                                    </div>
                                    <div>
                                        <x-input-label :for="'food_items[${index}][quantity]'" :value="__('Quantity, g or ml')" />
                                        <x-text-input type="number" step="0.01" name="food_items[${index}][quantity]" class="mt-1 block w-full" required />
                                    </div>
                                    <div class="md:col-span-2 flex justify-end">
                                        <button type="button" onclick="this.closest('.food-item').remove()" class="text-red-600 hover:text-red-900">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </template>
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
                            @if(isset($meal->id))
                                <button type="button" onclick="document.getElementById('save-template-modal').classList.remove('hidden')" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mr-4">
                                    {{ __('Save as Template') }}
                                </button>
                            @else
                                <button type="button" onclick="document.getElementById('use-template-modal').classList.remove('hidden')" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mr-4">
                                    {{ __('Use Template') }}
                                </button>
                            @endif
                            <a href="{{ route('meals.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                {{ __('Cancel') }}
                            </a>
                            <x-primary-button>
                                {{ isset($meal->id) ? __('Update Meal') : __('Create Meal') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Template Selection Modal -->
    <div id="template-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-lg w-full mx-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Select Template') }}</h3>
                <button type="button" onclick="closeTemplateModal()" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            @if($templates->count() > 0)
                <div class="space-y-4">
                    @foreach($templates as $template)
                        <div class="p-4 border rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer" onclick="useTemplate({{ $template->id }})">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ $template->name }}</h4>
                                <span class="text-sm text-gray-500 dark:text-gray-400">{{ optional($template->mealType)->name }}</span>
                            </div>
                            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                {{ $template->foodItems->count() }} {{ __('items') }}
                                @if($totals = $template->calculateNutritionalTotals())
                                    • {{ number_format($totals['calories'], 0) }} {{ __('calories') }}
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 dark:text-gray-400">{{ __('No templates available.') }}</p>
            @endif
        </div>
    </div>

    <!-- Save as Template Modal -->
    @if(isset($meal->id))
    <div id="save-template-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-md w-full">
            <h3 class="text-lg font-medium mb-4">{{ __('Save as Template') }}</h3>
            
            <form action="{{ route('meals.create-template', $meal) }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <x-input-label for="template_name" :value="__('Template Name')" />
                    <x-text-input id="template_name" class="block mt-1 w-full" type="text" name="name" required />
                </div>

                <div class="mb-4">
                    <x-input-label for="template_description" :value="__('Description (Optional)')" />
                    <textarea id="template_description" name="description" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="document.getElementById('save-template-modal').classList.add('hidden')" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500">
                        {{ __('Save Template') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

    <!-- Use Template Modal -->
    @if(!isset($meal->id))
    <div id="use-template-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-md w-full">
            <h3 class="text-lg font-medium mb-4">{{ __('Use Template') }}</h3>
            
            <div class="mb-4">
                <x-input-label for="template_id" :value="__('Select Template')" />
                <select id="template_id" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="">{{ __('Select a template') }}</option>
                    @foreach($templates as $template)
                        <option value="{{ $template->id }}" data-user-id="{{ $template->user_id }}">{{ $template->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeUseTemplateModal()" class="inline-flex items-center px-4 py-2 bg-gray-600 dark:bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 active:bg-gray-900 dark:active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    {{ __('Cancel') }}
                </button>
                <button type="button" onclick="applySelectedTemplate()" class="inline-flex items-center px-4 py-2 bg-blue-600 dark:bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 dark:hover:bg-blue-600 focus:bg-blue-700 dark:focus:bg-blue-600 active:bg-blue-900 dark:active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    {{ __('Apply Template') }}
                </button>
            </div>
        </div>
    </div>
    @endif

    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@11.0.2/public/assets/styles/choices.min.css">
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/choices.js@11.0.2/public/assets/scripts/choices.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Choices.js for existing food items
                initializeFoodItemSelects();
                
                document.getElementById('add-food-item').addEventListener('click', function() {
                    const foodItems = document.querySelectorAll('.food-item');
                    const newIndex = foodItems.length;
                    
                    const template = document.getElementById('food-item-template');
                    const clone = template.content.cloneNode(true);
                    
                    clone.querySelectorAll('[name*="[${index}]"]').forEach(element => {
                        element.name = element.name.replace('${index}', newIndex);
                    });
                    clone.querySelectorAll('[for*="[${index}]"]').forEach(element => {
                        element.htmlFor = element.htmlFor.replace('${index}', newIndex);
                    });
                    
                    document.getElementById('food-items-container').appendChild(clone);
                    
                    const newRow = document.querySelector('.food-item:last-child');
                    const select = newRow.querySelector('select');
                    initializeFoodItemSelect(select);
                });
            });

            function closeUseTemplateModal() {
                document.getElementById('use-template-modal').classList.add('hidden');
            }

            function applySelectedTemplate() {
                const templateSelect = document.getElementById('template_id');
                const templateId = templateSelect.value;
                if (!templateId) {
                    alert('Please select a template');
                    return;
                }

                // Check if template belongs to current user
                const currentUserId = {{ auth()->id() }};
                const selectedOption = templateSelect.options[templateSelect.selectedIndex];
                const templateUserId = selectedOption.getAttribute('data-user-id');

                if (templateUserId != currentUserId) {
                    alert('You are not authorized to access this template');
                    return;
                }

                fetch(`{{ route('meal-templates.data', ['template' => '__ID__']) }}`.replace('__ID__', templateId), {
                    method: 'GET',
                    credentials: 'same-origin',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(data => {
                            throw new Error(data.error || 'Failed to load template data');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    // Set meal type
                    document.getElementById('meal_type_id').value = data.meal_type_id;

                    // Clear existing food items
                    const container = document.getElementById('food-items-container');
                    container.innerHTML = '';

                    // Add food items from template
                    data.food_items.forEach((item, index) => {
                        const template = document.getElementById('food-item-template');
                        const clone = template.content.cloneNode(true);
                        
                        // Replace template variables with actual index
                        clone.querySelectorAll('[name*="[${index}]"]').forEach(element => {
                            element.name = element.name.replace('${index}', index);
                        });
                        clone.querySelectorAll('[for*="[${index}]"]').forEach(element => {
                            element.htmlFor = element.htmlFor.replace('${index}', index);
                        });
                        
                        container.appendChild(clone);
                        
                        const newRow = container.lastElementChild;
                        const select = newRow.querySelector('select');
                        const quantityInput = newRow.querySelector('input[type="number"]');
                        
                        // Initialize select and set its value
                        initializeFoodItemSelect(select, item.id);
                        
                        // Set quantity
                        quantityInput.value = item.quantity;
                    });

                    closeUseTemplateModal();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message || 'Error loading template data. Please try again.');
                });
            }

            function openUseTemplateModal() {
                document.getElementById('use-template-modal').classList.remove('hidden');
            }

            function initializeFoodItemSelects() {
                const selects = document.querySelectorAll('.food-item-select');
                selects.forEach(select => {
                    const selectedValue = select.getAttribute('data-selected-value');
                    initializeFoodItemSelect(select, selectedValue);
                });
            }

            function initializeFoodItemSelect(select, selectedValue = null) {
                if (!select.choices) {
                    const choices = new Choices(select, {
                        removeItemButton: true,
                        searchEnabled: true,
                        searchPlaceholderValue: 'Search for a food item...',
                        placeholder: true,
                        placeholderValue: 'Select a food item',
                        choices: @json($foodItems->map(function($item) {
                            return [
                                'value' => (string)$item->id,
                                'label' => $item->name,
                            ];
                        }))
                    });

                    if (selectedValue) {
                        choices.setChoiceByValue(selectedValue.toString());
                    }
                }
            }
        </script>
    @endpush

</x-app-layout>
