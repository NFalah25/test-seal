<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'email' => $this['user']->email,
            'name' => $this['user']->name,
            'avatar' => $this['user']->avatar,
            'token' => $this['token'],
        ];
    }
}
