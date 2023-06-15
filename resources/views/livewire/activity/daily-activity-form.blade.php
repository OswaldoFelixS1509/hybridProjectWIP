<div>
    <p class="text-xl text-black dark:text-white text-center">
        TEXT
    </p>
    
    <!-- Modal toggle -->
    <button data-modal-target="routineModal" data-modal-toggle="routineModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Routine select
    </button>

    @livewire('activity.daily.routine-modal')

    @livewire('activity.daily.selected-exercises')
    <button type="button" id="submitButton" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
</div>
