<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ExerciseResource;
use App\Models\Exercise;

class RoutineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'routine_id'    => $this->routine_id,
            'name'          => $this->name,
            'description'   => $this->description,
            'user_id'       => $this->user_id,
            'exercises'     => ExerciseResource::collection(Exercise::get()),

        ];
    }
}
