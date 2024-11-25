<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Meal Templates') }}
            </h2>
            <a href="{{ route('meal-templates.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                {{ __('Create Template') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($templates->isEmpty())
                        <p class="text-center py-4">{{ __('No meal templates yet.') }}</p>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($templates as $template)
                                <div class="border dark:border-gray-700 rounded-lg p-4 relative">
                                    <div class="relative top-2 right-2 flex space-x-2">
                                        <a href="{{ route('meal-templates.edit', $template) }}" class="text-blue-500 hover:text-blue-700">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('meal-templates.destroy', $template) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure you want to delete this template?')">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    
                                    <h3 class="text-lg font-semibold mb-2">{{ $template->name }}</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $template->mealType->name }} at {{ $template->time->format('H:i') }}</p>
                                    
                                    @if($template->description)
                                        <p class="text-sm mb-2">{{ $template->description }}</p>
                                    @endif
                                    
                                    <div class="text-sm">
                                        <p><strong>Calories:</strong> {{ number_format($template->total_calories, 1) }}</p>
                                        <p><strong>Protein:</strong> {{ number_format($template->total_protein, 1) }}g</p>
                                        <p><strong>Fat:</strong> {{ number_format($template->total_fat, 1) }}g</p>
                                        <p><strong>Carbs:</strong> {{ number_format($template->total_carb, 1) }}g</p>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <form action="{{ route('meal-templates.create-meal', $template) }}" method="POST">
                                            @csrf
                                            <input type="date" name="date" value="{{ date('Y-m-d') }}" class="rounded-md shadow-sm border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 block w-full sm:text-sm mb-2">
                                            <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                                {{ __('Create Meal from Template') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
