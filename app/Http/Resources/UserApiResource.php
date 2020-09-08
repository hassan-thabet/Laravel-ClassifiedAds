<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserApiResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'photo_url' =>$this->photo_url,
            'mobile' => $this->mobile,
            'email_verified' => $this->email_verified,
            'mobile_verified' => $this->mobile_verified,
            'products_count' => count($this->products),
            'api_token' => $this->api_token,
        ];

    }
}
