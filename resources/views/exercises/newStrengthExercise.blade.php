<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Save a new strenght exercise') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        @livewire('exercise.exercise-form', ['title' => 'New exercise', 'type' => 'strength']) 
               
    </x-slot>
        
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
                    title: 'Exercise saved succesfully'
                })
            }

            function saveExercise()
            {
                let data = {
                    name        : $('#name').val(),
                    bodyPart    : $('#bodyPart').val(),
                    category    : $('#category').val(),
                    sets        : $("input[name='sets[]']")
              .map(function(){return $(this).val();}).get(),
                    repetitions : $("input[name='repetitions[]']")
              .map(function(){return $(this).val();}).get(),
                    description : $("#description").val(),
                    comments    : $("#comments").val(),
                    type        : "Strength",
                };

                axios.post("{{route('exercise.saveStrengthExercise')}}", data)
                .then(function (response){
                    if(response['data']['success'] == true)
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
            }
        </script>
    </x-slot>
    
</x-app-layout>
