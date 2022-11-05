<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'required|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'confirm_password' => 'required|same:password',
        ];
    }

    /**
     * Return Validation Message
     *
     * @return array
     */
    public function messages()
    {
        $message = [
            'password.regex' => 'Password contains [A-Z],[a-z],[1-9] and [@!$%*#?&].',
        ];
        return $message;
    }
}
