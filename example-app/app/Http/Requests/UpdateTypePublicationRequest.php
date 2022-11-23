<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypePublicationRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => "required|unique:type_publications,name,".$this->route('typespublication')->id,
            "description" => "required",
        ];
    }
}
