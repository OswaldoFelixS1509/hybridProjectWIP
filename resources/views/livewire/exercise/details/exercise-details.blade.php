<div>
    <section class="bg-gray dark:bg-gray-900">
        <div class="px-4 mx-auto max-w-2xl lg:py-4">
            <label for="description" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Exercise description</label>
            <div class="block p-2.5 w-full bg-gray-50 dark:bg-gray-700 rounded-xl border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 mb-5">
                <p class="text-md text-gray-900 dark:text-gray-300 h-60 overflow-auto">
                    {{$exercise->description}}
                </p>
            </div>
            <label for="comments" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Exercise comments</label>
            <div class="block p-2.5 w-full bg-gray-50 dark:bg-gray-700 rounded-xl border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 mb-5">
                <p class="text-md text-gray-900 dark:text-gray-300 h-60 overflow-auto">
                    {{$exercise->comments}}
                </p>
            </div>
            @if($exercise->type == "Strength")
                @livewire('routines.details.strength-levels', ['exercise' => $exercise])
            @else
                @livewire('routines.details.cardio-levels', ['exercise' => $exercise])
            @endif

        </div>
    </section>

    
</div>
