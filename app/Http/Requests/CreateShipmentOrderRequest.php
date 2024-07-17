<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShipmentOrderRequest extends FormRequest
{

    /**
     * #comment: HERE can be an option to select the delivery service - as Enum-class, with implementation of existing service )
     *
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes','string', 'max:255'],
            'email' => ['sometimes','email', 'max:255'],
            'phone' => ['sometimes','string', 'max:255'],
            'delivery_address' => ['required', 'string'],
        ];
    }
}
