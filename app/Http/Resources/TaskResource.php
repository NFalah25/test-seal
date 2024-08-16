<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user' => $this->user->name,
            'project' => $this->project->name,
            'due_date' => $this->due_date,
            'description' => $this->description,
            'title' => $this->title,
        ];
    }
}
