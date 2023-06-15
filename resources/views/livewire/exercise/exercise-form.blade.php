<div>
    <section class="bg-gray dark:bg-gray-900">
        <div class="px-4 mx-auto max-w-2xl lg:py-8">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">
                {{$title}}
            </h2>
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <!-- Exercise data -->
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exercise Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type exercise name" required="">
                    </div>
                    
                    <div>
                        <label for="bodyPart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body part exercised</label>
                        <select id="bodyPart" name="bodyPart" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected>Select body part</option>
                            @foreach($bodyParts as $bodyPart)
                                <option value="{{$bodyPart->body_part_id}}">{{$bodyPart->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected>Select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->exercise_category_id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                 
                </div>
                <!-- Standards -->
                <div>
                    <h2 class="mb-2 text-xl font-bold text-gray-900 dark:text-white mt-3">
                        Standards
                    </h2>
                    <p class="text-xs font-bold text-gray-900 dark:text-white">At least one</p>
                    @foreach($inputs as $key => $value)
                        @livewire('exercise.standard-input', ['count' => $count, 'type' => $type], key($key))
                    @endforeach
            
                    <a wire:click="increment" class="inline-flex items-center mb-2 px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black dark:text-white bg-primary-700 rounded-lg focus:ring-4  border border-3 border-black dark:border-white focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800  select-none">
                        Add level&nbsp; <p> {{$count+1}}</p>
                    </a>
                </div>
                


                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 mb-2" placeholder="Your description here" required></textarea>
                </div>

                <div class="sm:col-span-2">
                    <label for="comments" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comments</label>
                    <textarea id="comments" name="comments" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 mb-2" placeholder="Your comments and details about this exercise here"></textarea>
                </div>


                <button type="submit" onclick="saveExercise()" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center dark:text-white  border bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add exercise
                </button>
        </div>
    </section>
    
</div>
