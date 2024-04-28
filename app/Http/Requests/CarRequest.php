<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'reg_number' => 'required|regex:/^[A-Z]{3}-[0-9]{3}$/',
            'brand' => 'required',
            'model' => 'required',
            'owner_id' => 'required|exists:App\Models\Car,id',

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'reg_number.required' => trans('messages.reg_number.required'),
            'reg_number.regex' => trans('messages.reg_number.regex'),
            'brand.required' => trans('messages.brand.required'),
            'model.required' => trans('messages.model.required'),
            'owner_id.required' => trans('messages.owner_id.required'),
            'owner_id.exists' => trans('messages.owner_id.exists')


        ];
    }
}
