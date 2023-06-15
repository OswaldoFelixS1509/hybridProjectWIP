<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $exercise->name }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 text-gray-900 dark:text-gray-100">
                    @livewire('exercise.details.exercise-details', ['exercise' => $exercise])
                </div>
            </div>
        </div>
    </x-slot>
    
        
</x-app-layout>