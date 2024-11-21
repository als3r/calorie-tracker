<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Food Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('food-items.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="calories_per_100g" :value="__('Calories per 100g')" />
                            <x-text-input id="calories_per_100g" name="calories_per_100g" type="number" step="0.1" class="mt-1 block w-full" :value="old('calories_per_100g')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('calories_per_100g')" />
                        </div>

                        <div>
                            <x-input-label for="calories_per_oz" :value="__('Calories per oz')" />
                            <x-text-input id="calories_per_oz" name="calories_per_oz" type="number" step="0.1" class="mt-1 block w-full" :value="old('calories_per_oz')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('calories_per_oz')" />
                        </div>

                        <div>
                            <x-input-label for="total_fat" :value="__('Total Fat (g per 100g)')" />
                            <x-text-input id="total_fat" name="total_fat" type="number" step="0.1" class="mt-1 block w-full" :value="old('total_fat')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('total_fat')" />
                        </div>

                        <div>
                            <x-input-label for="total_carb" :value="__('Total Carbohydrate (g per 100g)')" />
                            <x-text-input id="total_carb" name="total_carb" type="number" step="0.1" class="mt-1 block w-full" :value="old('total_carb')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('total_carb')" />
                        </div>

                        <div>
                            <x-input-label for="fiber" :value="__('Fiber (g per 100g)')" />
                            <x-text-input id="fiber" name="fiber" type="number" step="0.1" class="mt-1 block w-full" :value="old('fiber')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('fiber')" />
                        </div>

                        <div>
                            <x-input-label for="protein" :value="__('Protein (g per 100g)')" />
                            <x-text-input id="protein" name="protein" type="number" step="0.1" class="mt-1 block w-full" :value="old('protein')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('protein')" />
                        </div>

                        <div>
                            <x-input-label for="water" :value="__('Water content (%)')" />
                            <x-text-input id="water" name="water" type="number" step="0.1" class="mt-1 block w-full" :value="old('water')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('water')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('food-items.index') }}" class="text-gray-600 dark:text-gray-400 hover:underline">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
