<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "image"=>"required|mimes:png,jpg",
            "title"=>"required|min:3|unique:products",
            "category"=>"required|exists:categories,id",
            "description"=>"required|min:10",
            "price"=>"required|numeric"
        ];
    }
}
