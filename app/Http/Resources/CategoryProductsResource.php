<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryProductsResource extends JsonResource
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
            'category_id' => $this->id,
            'category_name' => $this->category_name,
            'icon_url' => $this->icon_url,
            'category-products' => $this->products->count() > 0 ? ProductResource::collection($this->products) : 'no products',
        ];
    }
}
