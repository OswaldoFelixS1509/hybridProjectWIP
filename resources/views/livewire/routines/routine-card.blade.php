<div class="max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{$routine->name}} </h5>
    </a>
    

    <a href="{{route('routine.routineDetail', $routine)}}" class="inline-flex my-3 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>

    
    
  <div id="accordion-collapse-{{$routine->routine_id}}" data-accordion="collapse">
    <div id="accordion-collapse-heading-{{$routine->routine_id}}">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-{{$routine->routine_id}}" aria-expanded="false" aria-controls="accordion-collapse-body-1">
          <span> Description </span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>

    <div id="accordion-collapse-body-{{$routine->routine_id}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$routine->routine_id}}">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 overflow-auto h-80">
        <p class="mb-2 text-gray-500 dark:text-gray-400"> {{$routine->description}} </p>
      </div>
    </div>


    <div id="accordion-collapse-heading2-{{$routine->routine_id}}">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body2-{{$routine->routine_id}}" aria-expanded="false" aria-controls="accordion-collapse-body2-{{$routine->routine_id}}">
        <span>Exercises</span>
        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div id="accordion-collapse-body2-{{$routine->routine_id}}" class="hidden" aria-labelledby="accordion-collapse-heading2-{{$routine->routine_id}}">
      <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 overflow-auto h-60">
        <p class="mb-2 text-gray-500 dark:text-gray-400">This are the exercises included on the routine.</p>
        @livewire('routines.routine-exercises', ['routine' => $routine])
      </div>
    </div>


  </div>

</div>