<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLead extends FormRequest
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
            'amount' => 'required|numeric',
            'income' => 'required|numeric',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'country' => 'required',
            'email' => 'required|unique:leads,email',
            'phon' => 'required|unique:leads,phon',
            'alternative_email' => 'required',
            'company' => 'required',
            'purpose' => 'required',
            'type_loans' => 'required',

        ];
    }
}
