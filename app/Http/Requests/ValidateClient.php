<?php

namespace App\Http\Requests;

use App\Client;

use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ValidateClient extends FormRequest
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
    public function rules(Request $request)
    {
 
        return [
            'company' => 'required|min:3',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:clients,id,'.$this->get('id'),
            'phone_number' => 'required',
            'address' => 'required', 
        ];
    }
}
