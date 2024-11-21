<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Food Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('food-items.update', $foodItem) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $foodItem->name)" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="calories_per_100g" :value="__('Calories per 100g')" />
                            <x-text-input id="calories_per_100g" name="calories_per_100g" type="number" step="0.1" class="mt-1 block w-full" :value="old('calories_per_100g', $foodItem->calories_per_100g)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('calories_per_100g')" />
                        </div>

                        <div>
                            <x-input-label for="calories_per_oz" :value="__('Calories per oz')" />
                            <x-text-input id="calories_per_oz" name="calories_per_oz" type="number" step="0.1" class="mt-1 block w-full" :value="old('calories_per_oz', $foodItem->calories_per_oz)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('calories_per_oz')" />
                        </div>

                        <div>
                            <x-input-label for="proteins" :value="__('Proteins (g per 100g)')" />
                            <x-text-input id="proteins" name="proteins" type="number" step="0.1" class="mt-1 block w-full" :value="old('proteins', $foodItem->proteins)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('proteins')" />
                        </div>

                        <div>
                            <x-input-label for="lipids" :value="__('Lipids (g per 100g)')" />
                            <x-text-input id="lipids" name="lipids" type="number" step="0.1" class="mt-1 block w-full" :value="old('lipids', $foodItem->lipids)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('lipids')" />
                        </div>

                        <div>
                            <x-input-label for="carbs" :value="__('Carbs (g per 100g)')" />
                            <x-text-input id="carbs" name="carbs" type="number" step="0.1" class="mt-1 block w-full" :value="old('carbs', $foodItem->carbs)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('carbs')" />
                        </div>

                        <div>
                            <x-input-label for="fiber" :value="__('Fiber (g per 100g)')" />
                            <x-text-input id="fiber" name="fiber" type="number" step="0.1" class="mt-1 block w-full" :value="old('fiber', $foodItem->fiber)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('fiber')" />
                        </div>

                        <div>
                            <x-input-label for="water" :value="__('Water content (%)')" />
                            <x-text-input id="water" name="water" type="number" step="0.1" class="mt-1 block w-full" :value="old('water', $foodItem->water)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('water')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                            <a href="{{ route('food-items.index') }}" class="text-gray-600 dark:text-gray-400 hover:underline">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
