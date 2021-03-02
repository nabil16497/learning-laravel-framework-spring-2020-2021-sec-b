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
            //
            'full_name' =>'required|min:5|max:30|regex:/[a-zA-Z.]/i' ,
            'username' => 'required|unique:alls|min:5|max:30|regex:/[a-zA-Z0-9]/i',
            'email' => 'required|unique:alls|email:rfc|min:10|max:50',
            'password' => 'required|min:8|max:20',
            'confirmpassword' => 'required_with:password|same:password',
            'company_name' => 'required|min:5|max:20',
            'phone' => 'required|min:10|max:15|numeric',
            'city' => 'required|min:5|max:20',
            'country' => 'required|min:5|max:20'
        ];
    }
}
