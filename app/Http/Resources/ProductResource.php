<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class   ProductResource extends JsonResource
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
            'product_id' => $this->id ,
            'product_title' => $this->title,
            'product_description' => $this->description,
            'product_price' => $this->price,
            'product_status' => $this->status,

            'category' => new CategoryResource($this->category),
            'product_images' => ImageResource::collection($this->images),
            'user' => new UserResource($this->user),
        ];
    }
}
