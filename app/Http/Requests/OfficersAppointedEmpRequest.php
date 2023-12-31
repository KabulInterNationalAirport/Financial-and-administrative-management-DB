<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficersAppointedEmpRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'birth_date' => 'required|string|max:20',
            'appointment_date' => 'required|string|max:20',
            'position_no' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'bank_card' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'state' => 'required|string|max:255',
        ];
    }
}
