<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max255'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel' => ['required', 'regex:/^[0-9\]+$/'],
            'postcode' => ['required'],
            'address' => ['reqired'],
            'category_id' => ['required'],
            'detail' => ['required'],

            //
        ];
    }
    public function messages(
        return [
            
        ]
    )
}
