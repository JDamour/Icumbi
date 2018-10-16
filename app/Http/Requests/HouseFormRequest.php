<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "housePrice" => "required",
            "streetCode" => "required|max:191",
            "rooms" => "required",
            "length" => "required",
            "width" => "required",
            "water" => "required",
            "bathroom" => "required",
            "toilet" => "required",
            "fenced" => "required",
            "payfreq" => "required",
            "country" => "required",
            "province" => "required",
            "district" => "required",
            "sector" => "required",
            "cell" => "required|max:191",
            "houseLocation" => "required"
        ];
    }
}
