<div>
    
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 ">
        @foreach($levels as $level)
        <div class="px-3 border-l">
            <p class="text-xl">
                Level {{$level->level}}
            </p>
            <p class="text-sm">
                Time {{$level->time}}
            </p>
            <p class="text-sm">
                Distance/Repetitions {{$level->distance}}
            </p>
        </div>
        @endforeach
    </div>
    
    
</div>
