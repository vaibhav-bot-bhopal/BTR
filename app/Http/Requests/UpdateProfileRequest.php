<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' =>  'required',
            'email'    => 'required',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'name.required' =>  'The name field is required !!',
                'email.required'    => 'The email field is required !!',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'name.required' =>  'नाम का फील्ड आवश्यक है !!',
                'email.required'    => 'ईमेल का फील्ड आवश्यक है !!',
            ];
        }
    }
}
