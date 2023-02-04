<?php

namespace App\Http\Resources\Resources\admin;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return     
        [
            'id' => $this->id,
            'title' => $this->title,
            'post_content' => $this->post_content,
            'image' => $this->image,
            'likes' => $this->likes,
            'category_id' => $this->category_id
        ];
    }
}
