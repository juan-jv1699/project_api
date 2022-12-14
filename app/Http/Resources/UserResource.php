<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "email"=>$this->email,
            "birthdate"=>$this->birthdate,
            "cc"=>$this->cc,
            "role"=>$this->role,
            "image"=>$this->image
        ];
    }
    public function with($request)
    {
        return [
            'res'=>true
        ];
    }
}
