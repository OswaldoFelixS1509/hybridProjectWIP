<!-- Nested accordion -->
<div id="accordion-nested-collapse" data-accordion="open">
    @foreach($exercises as $exercise)
        <div class="w-full text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <a href="{{route('exercise.exerciseDetail', $exercise)}}">
                <button type="button" class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                    {{$exercise->name}}
                    <svg class="absolute end-3 w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </button>
            </a>
        </div>
    @endforeach
</div>
<!-- End: Nested accordion -->