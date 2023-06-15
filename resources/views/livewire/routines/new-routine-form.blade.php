<div>
    <div class="mb-6">
        <label for="routinename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Routine name</label>
        <input type="text" id="routinename" name="routinename" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Type the routine name">
    </div>

    <div class="mb-6">
        <label for="routinedescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Routine description</label>
        <textarea id="routinedescription" name="routinedescription" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type a description for the routine..."></textarea>
    </div>


    {{-- Displays selected exercises from modal --}}
    @livewire('routines.selected-exercises-table')
    {{-- Display modal with exercises list --}}
    @livewire('routines.exercises-modal')
    
    
</div>
