<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|unique:users,name',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:8|regex:/[a-z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
        ];
    }
}
