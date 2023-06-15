<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Save daily workout') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @livewire('activity.daily-activity-form')
            </div>
            
        </div>
    </div>
    <x-slot name="scripts">
        <script>

            function errorAlert()
            {
                Swal.fire({
                    title: 'Error!',
                    text: 'An input is missing, make sure to check them all!',
                    icon: 'error',
                    confirmButtonText: 'Oks',
                })
            }

            function successAlert()
            {
                //Shows a alert when the record is saved succesfully!
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Workout saved succesfully'
                })
            }

            $("#submitButton").click(function()
            {
                let data = {
                    exercises        : $("input[name='selectedExercises[]']")
                    .map(function(){return $(this).val();}).get(),
                    sets        : $("input[name='sets[]']")
                    .map(function(){return $(this).val();}).get(),
                    repetitions        : $("input[name='repetitions[]']")
                    .map(function(){return $(this).val();}).get(),
                };
                
                axios.post("{{route('activity.SaveDaily')}}", data)
                .then(function (response){
                    console.log(response['data'])
                    if(response['data']['success'])
                    {
                        successAlert();
                    }
                    else
                    {
                        errorAlert();
                    }
                    
                })
                .catch( function(response){
                    console.log(error.response.data);
                });
            });
        </script>
    </x-slot>
</x-app-layout>
