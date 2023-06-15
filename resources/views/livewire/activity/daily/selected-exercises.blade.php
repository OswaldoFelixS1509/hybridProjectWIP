<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    
                    <th scope="col" class="px-6 py-3">
                        Exercise name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sets/Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Repetitions/Distance
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($exercises as $exercise)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$exercise->exName}}
                            <input type="hidden" id="selectedExercises{{$exercise->exId}}" name="selectedExercises[]" value="{{$exercise->exId}}">
                        </th>
                        <td class="px-6 py-4">
                            {{$exercise->type}}
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" name="sets[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sets/Time" required>
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" name="repetitions[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block md:w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Repetitions/Distance" required>
                        </td>
                        <td class="px-6 py-4">
                            <img wire:click="$emit('deletedExercise', {{$exercise->exId}})" class="h-auto max-w-xs" src="{{URL::asset('images/delete.png')}}" alt="" value="{{$exercise->exId}}">
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button data-modal-target="exerciseModal" data-modal-toggle="exerciseModal" class="block text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-3xl px-5 py-2.5 text-center  my-8" type="button">
    +
    </button>
    @livewire('activity.daily.exercises-modal')
    <p class="text-white">
    </p>
</div>
