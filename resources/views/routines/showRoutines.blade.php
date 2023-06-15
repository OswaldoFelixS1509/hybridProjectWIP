<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Routine list') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if( count($routines) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                        @foreach($routines as $routine)
                            @livewire('routines.routine-card', ['routine' => $routine])
                        @endforeach
                    </div>
                    {{$routines->links()}}
                @else
                    @livewire('routines.zero-records')
                @endif
                
            </div>
        </div>

        
    </x-slot>
    
        
</x-app-layout>