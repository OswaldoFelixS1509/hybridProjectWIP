<div>
    <h3 class="text-white mb-2"> Level {{$count}}</h3>
    <div class="grid gap-6 mb-6 md:grid-cols-2 mt-2">
        @if($type == "strength")
            <div>   
                <label for="sets" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sets</label>
                <input type="text" id="sets" name="sets[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type the goal number of sets" required>
            </div>
            <div>
                <label for="repetitions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repetitions</label>
                <input type="text" id="repetitions" name="repetitions[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type the goal number of repetitions per set" required>
            </div>
        @else
            <div>   
                <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
                <input type="text" id="time" name="time[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type the time goal" required>
            </div>
            <div>
                <label for="distance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distance/repetitions</label>
                <input type="text" id="distance" name="distance[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type the distance/repetitions goal" required>
            </div> 
        @endif
         
        
    </div>
    
</div>
