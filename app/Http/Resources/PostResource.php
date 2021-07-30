<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            //'user' => $this->user->name,
            'name' => $this->name,
            'created_at' => $this->created_at->diffForHumans(),   //per  es: creato 3 ore fa(questo formato)
            //'user_id' => $this->user_id,
        ];
    }
}
