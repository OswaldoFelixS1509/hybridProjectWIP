<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Routine list') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if( count($exercises) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                        @foreach($exercises as $exercise)
                            @livewire('exercise.list.exercise-card', ['exercise' => $exercise])
                        @endforeach
                    </div>
                    {{$exercises->links()}}
                @else
                    @livewire('exercise.list.zero-records')
                @endif
                
            </div>
        </div>

        
    </x-slot>
    
        
</x-app-layout>