<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrg extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'email'     =>  'required|unique:user,email|email',
        'name'      =>  'required',
        'mobile'    =>  'required|numeric|digits:10',
        'address'   =>  'max:255',
            //
        ];
    }
}
