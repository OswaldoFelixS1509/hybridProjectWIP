<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New routine') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <section class="px-4 mx-auto max-w-2xl lg:py-8">
            @livewire('routines.new-routine-form')

            <div class="flex justify-center">
                <button type="button" onclick="saveRoutine()" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ">Done</button>
            </div>
        </section>
    </x-slot>

    <x-slot name="scripts">
        <script>
            function saveRoutine()
            {
                let data = {
                    name            : $('#routinename').val(),
                    description     : $('#routinedescription').val(),
                    exercises       : $("input[name='selectedExercises']").val().split(','),
                };

                axios.post("{{route('routine.saveRoutine')}}", data)
                .then(function (response){
                    if(response['data']['success'] == true)
                    {
                        successAlert();
                    }
                    else
                    {
                        let errorMSG = "";
                        $.each(response['data']['errors'], function (key, value) {
                            errorMSG += value + '\n';
                        });
                        errorAlert(errorMSG);
                    }
                })
                .catch( function(error){
                    if (error.response) {
                        // The request was made and the server responded with a status code
                        // that falls out of the range of 2xx
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.headers);
                        } else if (error.request) {
                            // The request was made but no response was received
                            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log(error.request);
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log('Error', error.message);
                        }
                    errorAlert('Oops!, something happened. \n Please try again');
                });
            }

            function errorAlert(msg)
            {
                Swal.fire({
                    title: 'Error!',
                    text: msg,
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
                    title: 'Routine saved succesfully'
                })
            }
        </script>
    </x-slot>

</x-app-layout>