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
                            <x-input-label for="calories_per_gram" :value="__('Calories per gram')" />
                            <x-text-input id="calories_per_gram" name="calories_per_gram" type="number" step="0.01" class="mt-1 block w-full" :value="old('calories_per_gram', $foodItem->calories_per_gram)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('calories_per_gram')" />
                        </div>

                        <div>
                            <x-input-label for="calories_per_oz" :value="__('Calories per oz')" />
                            <x-text-input id="calories_per_oz" name="calories_per_oz" type="number" step="0.01" class="mt-1 block w-full" :value="old('calories_per_oz', $foodItem->calories_per_oz)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('calories_per_oz')" />
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
